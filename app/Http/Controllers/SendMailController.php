<?php

namespace App\Http\Controllers;

use App\Mail\Contato;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function lead(Request $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;

        $data = [
            'name' => $name,
            'tel' => $tel,
            'email' => $email,
        ];

        Mail::to('rodolphosp@gmail.com')->send(new Sendmail($data));

        //return redirect()->back();
        return redirect()->route('home');

    }

    public function contato(Request $request)
    {
        $name = $request->name;
        $message = $request->message;
        $email = $request->email;

        $data = [
            'name' => $name,
            'message' => $message,
            'email' => $email,
        ];

        Mail::to('rodolphosp@gmail.com')->send(new Contato($data));

        //return redirect()->back();
        return redirect()->route('contato');

    }
}
