<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoController extends Controller
{
    //

    public function index()
    {
        $videos = Video::all();
        return view('dashboard_pages.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('dashboard_pages.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimes:mp4,webm,ogg|max:102400' // maximum size 100MB
        ]);

        $path = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'path' => $path
        ]);

        return redirect()->route('videos.index')->with('success', 'تم إضافة الفيديو بنجاح');
    }

    public function edit(Video $video)
    {
        return view('dashboard_pages.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'nullable|file|mimes:mp4,webm,ogg|max:51200'
        ]);

        $data = ['title' => $request->title];

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($video->path);
            $data['path'] = $request->file('video')->store('videos', 'public');
        }

        $video->update($data);

        return redirect()->route('videos.index')->with('success', 'تم تعديل الفيديو بنجاح');
    }

    public function destroy(Video $video)
    {
        Storage::disk('public')->delete($video->path);
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'تم حذف الفيديو بنجاح');
    }
}
