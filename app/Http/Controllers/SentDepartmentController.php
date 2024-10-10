<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SentDepartment;

class SentDepartmentController extends Controller
{
    public function index()
    {
        $messages = SentDepartment::all();
        return view('sentdepartment.sentdepartment', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

         // Tạo và lưu tin nhắn mới
         $message = new SentDepartment();
         $message->title = $request->title;
         $message->content = $request->content;
         $message->save();

        return redirect()->route('sentdepartment.sentdepartment')->with('status', 'Tin nhắn gửi thành công!');
    }
}



