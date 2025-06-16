<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'content' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ]);

        return response()->json(['message' => __('messages.main.comment_added')], 200);
    }

    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();
        return view('dashboard_pages.feedbacks', compact('feedbacks'));
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('feedbacks.index')->with('success', 'تم حذف التعليق بنجاح');
    }
}
