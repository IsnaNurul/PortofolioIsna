<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Profil;
use App\Models\Portofolio;


class ContactController extends Controller
{
    //
    function contact(){
        $data['profil'] = Profil::first();
        $data['portofolio'] = Portofolio::all();
        return view('welcome', $data);
    }
    
    function admin(){
        $data['contact'] = Contact::all();
        return view('halamanadmin.contact', $data);
    }

    function add(){
        $data = [
            'action' => url('contact/create'),
            'tombol' => 'simpan',
            'contact' => (object)[
                'nama' => '',
                'email' => '',
                'password' => '',
            ],
        ];

        return view('welcome');
    }

    function create(Request $req){
        // $this -> validate($req, [
            // 'nama' => 'required|string',
            // 'email' => 'required|email',
            // 'pesan' => 'required|string',
        // ]);

        Contact::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'pesan' => $req->pesan,
        ]);

        return redirect('/');

    }

    function delete($id){
        Contact::Where('id', $id)->delete();

        return redirect('contactadmin');
    }

}
