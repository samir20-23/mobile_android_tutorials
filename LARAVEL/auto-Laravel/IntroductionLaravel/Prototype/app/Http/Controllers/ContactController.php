<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;

class ContactController extends Controller
{
    public function create(){
        return view('contact') ;
    }

    public function store(request $request){
        //valider les données 
        $data = $request ->validate([
            "name" => 'required|string' ,
            "email" => 'required|email',
            "msg" => 'required' 
        ]);

        //envoi de l'email
        Mail::send('emails.contact', $data, function ($message) {
            $message->to('bougtoub.samia.solicode@gmail.com')
                    ->subject('Nouveau message de contact');
        });
        

        // Rediriger après l'envoi
        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');
    }
}
