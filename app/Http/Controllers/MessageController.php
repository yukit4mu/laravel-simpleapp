<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(): View
    {
        $messages = Message::all();
        //messagesというキーでviewに渡す
        return view('message/index', ['messages' => $messages]);
    }

    public function store(Request $request): RedirectResponse
    {
        $messages = new Message();
        $messages -> body = $request -> body;
        $messages -> save();

        return redirect('/messages');
    }
}
