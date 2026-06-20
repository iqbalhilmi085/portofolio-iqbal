<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Message::create($request->safe()->only(['name', 'email', 'message']));

        return redirect()->back()->with('success', 'Pesan berhasil dikirim! Saya akan menghubungi Anda segera.');
    }
}
