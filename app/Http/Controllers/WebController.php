<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Portofolio;
use App\Models\Contact;

class WebController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::first();
        $data['portofolio'] = Portofolio::all();
        $data['contact'] = Contact::all();
        return view('welcome', $data);
    }

    
}
