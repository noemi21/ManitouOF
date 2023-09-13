<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    public function home() {
        return view('home');
    }

    
    public function macchine() {
        return view('macchine');
    }
    
    public function servizi() {
        return view('servizi');
    }

    public function chiSiamo() {
        return view('chiSiamo');
    }


    public function contatti() {
        return view('contatti');
    }

    public function macchine2() {
        return view('macchine2');
    }

    public function macchina1() {
        return view('macchina1');
    }

    public function macchina2() {
        return view('macchina2');
    }

    public function macchina3() {
        return view('macchina3');
    }

    public function macchina4() {
        return view('macchina4');
    }

    public function macchina5() {
        return view('macchina5');
    }

    public function macchina6() {
        return view('macchina6');
    }

    public function macchina7() {
        return view('macchina7');
    }

    public function macchina8() {
        return view('macchina8');
    }

    public function macchina9() {
        return view('macchina9');
    }

    public function usato1() {
        return view('usato1');
    }

    public function offerta1() {
        return view('offerta1');
    }


    public function contactCreate(Request $request) {
        $name = $request->input('name');
        $azienda = $request->azienda;
        $email = $request->email;
        $message = $request->message;

        $userData = compact('azienda','name' , 'email' , 'message');

        Mail::to($email)->send(new ContactMail($userData));

        return redirect(route('contatti'))->with('successMessage' , 'Hai inviato la tua richiesta con successo!');
    }
}

