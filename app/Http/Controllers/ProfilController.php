<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class ProfilController extends Controller
{
    //
    function profil(){
        $data['profil'] = Profil::first();
        $data['action'] = url('profil/update').'/'.$data['profil']->id;
        return view('halamanadmin.profil', $data);
    }


    function add(){
        $data = [
            'action' => url('profil/create'),
            'portofolio' => (object)[
                'nama_lengkap' => '',
                'status' => '',
                'tempat_lahir' => '',
                'tgl_lahir' => '',
                'jenis_kelamin' => '',
                'alamat' => '',
                'ig' => '',
                'wa' => '',
                'twitt' => '',
                'about' => '',
                'foto_profil' => '',
            ],
        ];

        return view('halamanadmin.profil' , $data);
    }

    function create(Request $req){
        $this -> validate($req, [
            'nama_lengkap' => 'required|string',
            'status' => '',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'ig' => 'required|string',
            'wa' => 'required|string',
            'twitt' => 'required|string',
            'about' => 'required|string',
            'foto_profil' => 'required',
       ]);

        Profil::create([
            'nama_lengkap' => $req->nama_lengkap,
            'status' => $req->status,
            'tempat_lahir' => $req->tempat_lahir,
            'tgl_lahir' => $req->tgl_lahir,
            'jenis_kelamin' => $req->jenis_kelamin,
            'alamat' => $req->alamat,
            'ig' => $req->ig,
            'wa' => $req->wa,
            'twitt' => $req->twitt,
            'about' => $req->about,
            'foto_profil' => $req->file('foto_profil')->store('foto_profil'),
        ]);

        return redirect('profil');
    }

    function edit($id){
        $data['profil'] = Profil::find($id);
        $data['action'] = url('profil/update').'/'.$data['profil']->id;
        return view('halamanadmin.profil', $data);
    }

    function update(request $req){
            $this -> validate($req, [
                // 'nama_lengkap' => 'required|string',
                // 'status' => 'required',
                // 'tempat_lahir' => 'required|string',
                // 'tgl_lahir' => 'required',
                // 'jenis_kelamin' => 'required|string',
                // 'alamat' => 'required|string',
                // 'ig' => 'required|string',
                // 'wa' => 'required|string',
                // 'twitt' => 'required|string',
                // 'about' => 'required|string',
                
           ]);
    
            if ($req->file('foto_profil')) {
                $profil = Profil::Where('id', $req->id)->first();
                Storage::delete($profil->foto_profil);
    
                $file = $req->file('foto_profil')->store('foto_profil');
            
            }else {
                $file = DB::raw('foto_profil');
            }
    
    
            Profil::Where('id', $req->id)->update([
                'nama_lengkap' => $req->nama_lengkap,
                'status' => $req->status,
                'tempat_lahir' => $req->tempat_lahir,
                'tgl_lahir' => $req->tgl_lahir,
                'jenis_kelamin' => $req->jenis_kelamin,
                'alamat' => $req->alamat,
                'ig' => $req->ig,
                'wa' => $req->wa,
                'twitt' => $req->twitt,
                'about' => $req->about,
                'foto_profil' => $file,
            ]);
            return redirect('profil');
       }
}
