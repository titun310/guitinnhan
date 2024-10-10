<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $groups = Group::all();  // Lấy tất cả các nhóm
        $messages = Message::with('groups')->get();  // Lấy tất cả tin nhắn cùng nhóm nhận
        return view('messages.index', compact('groups', 'messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'groups' => 'required|array'  // Kiểm tra xem groups có phải là một mảng
        ]);

        // Tạo tin nhắn mới
        $message = Message::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Liên kết tin nhắn với các nhóm được chọn
        $message->groups()->sync($request->groups);

        return redirect()->back()->with('success', 'Thông báo được gửi thành công!');
    }
}
