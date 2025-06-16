<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    //
    public function index()
    {
        $cards = Card::all();
        return view('dashboard_pages.cards.index', compact('cards'));
    }

    public function create()
    {
        return view('dashboard_pages.cards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'domain' => 'required|string|max:255',
            'range' => 'required|string|max:255',
            'color' => 'required|string|in:red,green,blue,yellow,purple,pink,gray,indigo'
        ]);

        $path = $request->file('image')->store('cards', 'public');

        Card::create([
            'name' => $request->name,
            'image_path' => $path,
            'domain' => $request->domain,
            'range' => $request->range,
            'color' => $request->color
        ]);

        return redirect()->route('cards.index')->with('success', 'تم إضافة البطاقة بنجاح');
    }

    public function edit(Card $card)
    {
        return view('dashboard_pages.cards.edit', compact('card'));
    }

    public function update(Request $request, Card $card)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'domain' => 'required|string|max:255',
            'range' => 'required|string|max:255',
            'color' => 'required|string|in:red,green,blue,yellow,purple,pink,gray,indigo'
        ]);

        $data = [
            'name' => $request->name,
            'domain' => $request->domain,
            'range' => $request->range,
            'color' => $request->color
        ];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($card->image_path);
            $data['image_path'] = $request->file('image')->store('cards', 'public');
        }

        $card->update($data);

        return redirect()->route('cards.index')->with('success', 'تم تعديل البطاقة بنجاح');
    }

    public function destroy(Card $card)
    {
        Storage::disk('public')->delete($card->image_path);
        $card->delete();
        return redirect()->route('cards.index')->with('success', 'تم حذف البطاقة بنجاح');
    }
}
