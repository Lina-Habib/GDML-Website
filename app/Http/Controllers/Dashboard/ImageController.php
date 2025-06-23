<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function index(){
        $images = Image::all();
        return view('dashboard_pages.images.index', compact('images'));
    }

    public function create(){
        return view('dashboard_pages.images.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $paths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $paths[] = $image->store('images', 'public');
            }
        }

        Image::create([
            'title' => $request->title,
            'paths' => $paths
        ]);

        return redirect()->route('images.index')->with('success', 'تم إضافة المعرض بنجاح');
    }

    public function edit(Image $image){
        return view('dashboard_pages.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image){
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = ['title' => $request->title];
        $paths = $image->paths; // الحفاظ على الصور القديمة

        if ($request->hasFile('images')) {
            // حذف الصور القديمة إذا أردت استبدالها
            foreach ($image->paths as $path) {
                Storage::disk('public')->delete($path);
            }
            $paths = [];
            foreach ($request->file('images') as $newImage) {
                $paths[] = $newImage->store('images', 'public');
            }
        }

        $data['paths'] = $paths;
        $image->update($data);

        return redirect()->route('images.index')->with('success', 'تم تعديل المعرض بنجاح');
    }

    public function destroy(Image $image){
        foreach ($image->paths as $path) {
            Storage::disk('public')->delete($path);
        }
        $image->delete();
        return redirect()->route('images.index')->with('success', 'تم حذف المعرض بنجاح');
    }
}
