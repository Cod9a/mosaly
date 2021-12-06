<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\sendMessageRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;
use App\Mail\ReceiveMail;

class ContactController extends Controller
{
    public function sendContact(sendMessageRequest $request){
        // Contact::create([
        //     'name' => $request->validated()['name'],
        //     'email' => $request->validated()['email'],
        //     'subject' => $request->validated()['subject'],
        //     'message' => $request->validated()['message'],
        // ]);
        Mail::to('tchotchovi2021@gmail.com')->send(new ReceiveMail($request->validated()));
        Mail::to($request->validated()['email'])->send(new ConfirmationMail());
        return redirect()->route('index')->with('success', 'Merci pour votre message. Nous vous reviendrons le plus vite possible.');
    }
}
