<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Validator;
use Illuminate\Support\Facades\Log;

class TwoEquationsController extends Controller{

    public function index(){
        App::setLocale('ar');
        return view('website_pages.draw_2D_twoEquations');
    }

    public function solve(Request $request){
        App::setLocale('ar');
        $equation1 = $request->input('equation1');
        $equation2 = $request->input('equation2');

        try {
            Log::debug('Raw Input Equation 1: ' . $equation1);
            Log::debug('Raw Input Equation 2: ' . $equation2);

            $parsedEq1 = $this->parseEquation($equation1);
            $parsedEq2 = $this->parseEquation($equation2);

            if (!$parsedEq1['valid'] || !$parsedEq2['valid']) {
                Log::error('Invalid format: Eq1: ' . json_encode($parsedEq1) . ', Eq2: ' . json_encode($parsedEq2));
                return view('website_pages.draw_2D_twoEquations', [
                    'error' => 'صيغة المعادلة/المتباينة غير صحيحة: ' . ($parsedEq1['message'] ?? '') . ' | ' . ($parsedEq2['message'] ?? ''),
                    'equation1' => $equation1,
                    'equation2' => $equation2
                ]);
            }

            $intersection = $this->findIntersection($parsedEq1, $parsedEq2);
            $solutionRegion = $this->getSolutionRegion($parsedEq1, $parsedEq2);
            $chartData = $this->prepareChartData($parsedEq1, $parsedEq2, $intersection);

            $solutionMessage = empty($chartData['solutionRegion']) && ($parsedEq1['sign'] !== '=' || $parsedEq2['sign'] !== '=') 
                ? 'لا توجد منطقة حل مشتركة للمتباينات.' 
                : '';

            return view('website_pages.draw_2D_twoEquations', compact('intersection', 'solutionRegion', 'chartData', 'equation1', 'equation2', 'solutionMessage'));
        } catch (\Exception $e) {
            Log::error('Error processing input: ' . $e->getMessage());
            return view('website_pages.draw_2D_twoEquations', [
                'error' => 'حدث خطأ أثناء معالجة الإدخال: ' . $e->getMessage(),
                'equation1' => $equation1,
                'equation2' => $equation2
            ]);
        }
    }

    private function parseEquation($equation){
        if (empty($equation)) {
            return ['valid' => false, 'message' => 'المعادلة/المتباينة فارغة'];
        }

        // تنظيف الإدخال
        $equation = trim($equation);
        $equation = str_replace(['س', 'ص'], ['x', 'y'], $equation);
        $equation = str_replace(['≥', '≤'], ['>=', '<='], $equation);
        $equation = preg_replace('/\s+/', '', $equation);

        // تحويل الأرقام العربية إلى لاتينية
        $arabicNumbers = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
        $latinNumbers = ['0','1','2','3','4','5','6','7','8','9'];
        $equation = str_replace($arabicNumbers, $latinNumbers, $equation);

        // تحقق من الصيغة
        if (!preg_match('/^[\dxy\+\-\.\=><]+$/', $equation)) {
            return ['valid' => false, 'message' => 'المعادلة تحتوي على رموز غير مدعومة'];
        }

        // تحديد العامل
        $operator = '';
        foreach (['>=', '<=', '>', '<', '='] as $op) {
            if (strpos($equation, $op) !== false) {
                $operator = $op;
                break;
            }
        }

        if (!$operator) {
            return ['valid' => false, 'message' => 'المعادلة لا تحتوي على علامة مساواة أو متباينة'];
        }

        // اختيار المعالجة بناءً على العامل
        return $operator === '=' ? $this->parseLinearEquation($equation) : $this->parseInequality($equation);
    }

    private function parseLinearEquation($equation){
        [$lhs, $rhs] = explode('=', $equation);

        // استخلاص المعاملات
        $a = 0; $b = 0;
        preg_match_all('/([+\-]?\d*\.?\d*)(x|y)/', $lhs, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $coef = $match[1];
            $var = $match[2];
            if ($coef === '+' || $coef === '') $coef = 1;
            elseif ($coef === '-') $coef = -1;
            else $coef = floatval($coef);

            if ($var === 'x') $a += $coef;
            elseif ($var === 'y') $b += $coef;
        }

        // معالجة صيغة y=mx+c
        if (preg_match('/^y=([+\-]?\d*\.?\d*)x([+\-]?\d*\.?\d*)$/', $equation, $matches)) {
            $m = $matches[1] === '+' || $matches[1] === '' ? 1 : ($matches[1] === '-' ? -1 : floatval($matches[1]));
            $c = floatval($matches[2]);
            $a = -$m;
            $b = 1;
            $rhs = $c;
        }

        $rhsVal = floatval($rhs);

        return [
            'valid' => true,
            'a' => $a,
            'b' => $b,
            'c' => $rhsVal,
            'sign' => '='
        ];
    }

    private function parseInequality($equation){
        $operator = '';
        foreach (['>=', '<=', '>', '<'] as $op) {
            if (strpos($equation, $op) !== false) {
                $operator = $op;
                break;
            }
        }

        [$lhs, $rhs] = explode($operator, $equation);

        // استخلاص المعاملات
        $a = 0; $b = 0;
        preg_match_all('/([+\-]?\d*\.?\d*)(x|y)/', $lhs, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $coef = $match[1];
            $var = $match[2];
            if ($coef === '+' || $coef === '') $coef = 1;
            elseif ($coef === '-') $coef = -1;
            else $coef = floatval($coef);

            if ($var === 'x') $a += $coef;
            elseif ($var === 'y') $b += $coef;
        }

        $rhsVal = floatval($rhs);

        return [
            'valid' => true,
            'a' => $a,
            'b' => $b,
            'c' => $rhsVal,
            'sign' => $operator
        ];
    }

    private function findIntersection($eq1, $eq2){
        $a1 = $eq1['a'];
        $b1 = $eq1['b'];
        $c1 = $eq1['c'];
        $a2 = $eq2['a'];
        $b2 = $eq2['b'];
        $c2 = $eq2['c'];

        Log::debug("Intersection: a1=$a1, b1=$b1, c1=$c1, a2=$a2, b2=$b2, c2=$c2");

        $det = $a1 * $b2 - $a2 * $b1;
        if (abs($det) < 1e-10) {
            return ['x' => null, 'y' => null, 'message' => 'المعادلتان متوازيتان أو متطابقتان'];
        }

        $x = ($c1 * $b2 - $c2 * $b1) / $det;
        $y = ($c2 * $a1 - $c1 * $a2) / $det;

        return ['x' => round($x, 2), 'y' => round($y, 2), 'message' => ''];
    }

    private function getSolutionRegion($eq1, $eq2){
        $region = [];
        $x_values = range(-10, 10, 0.5);
        $y_values = range(-10, 10, 0.5);

        foreach ($x_values as $x) {
            foreach ($y_values as $y) {
                $satisfies1 = $this->satisfiesInequality($eq1, $x, $y);
                $satisfies2 = $this->satisfiesInequality($eq2, $x, $y);

                if ($satisfies1 && $satisfies2) {
                    $region[] = ['x' => round($x, 2), 'y' => round($y, 2)];
                }
            }
        }
        return $region;
    }

    private function getY($eq, $x){
        $a = $eq['a'];
        $b = $eq['b'];
        $c = $eq['c'];
        return $b != 0 ? ($c - $a * $x) / $b : null;
    }

    private function satisfiesInequality($eq, $x, $y){
        if ($y === null) return false;
        $a = $eq['a'];
        $b = $eq['b'];
        $c = $eq['c'];
        $sign = $eq['sign'];
        $value = $a * $x + $b * $y;

        switch ($sign) {
            case '<': return $value < $c;
            case '≤': case '<=': return $value <= $c;
            case '>': return $value > $c;
            case '≥': case '>=': return $value >= $c;
            case '=': return abs($value - $c) < 1e-10;
            default: return false;
        }
    }

    private function prepareChartData($eq1, $eq2, $intersection){
        $x_values = range(-10, 10, 0.2);
        $data1 = [];
        $data2 = [];
        foreach ($x_values as $x) {
            $y1 = $this->getY($eq1, $x);
            $y2 = $this->getY($eq2, $x);
            if ($y1 !== null) $data1[] = ['x' => round($x, 2), 'y' => round($y1, 2)];
            if ($y2 !== null) $data2[] = ['x' => round($x, 2), 'y' => round($y2, 2)];
        }

        $chartData = [
            'equation1' => $data1,
            'equation2' => $data2,
            'intersection' => $intersection,
            'solutionRegion' => $this->getSolutionRegion($eq1, $eq2)
        ];

        Log::debug('Chart Data: ' . json_encode($chartData));
        return $chartData;
    }
}