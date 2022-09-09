<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;

class ContactConntroller extends Controller
{
    public function create()
    {
        return view('PageContact');
    }
    public function store(ContactRequest $request)
    {
        $mailable = new ContactMessage(
            $request->tbobjet,
            $request->tbemail,
            $request->tbmassage
        );
        Mail::to('marcadoni4425@gmail.com')->send($mailable);
        return 'DONE';
    }
}
