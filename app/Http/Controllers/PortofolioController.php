<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    //

    function portofolio(){
        $data['portofolio'] = Portofolio::all();
        return view('halamanadmin.portofolio', $data);
    }

    function add(){
        $data = [
            'action' => url('portofolio/create'),
            'tombol' => 'simpan',
            'portofolio' => (object)[
                'tittle' => '',
                'category' => '',
                'description' => '',
                'foto' => '',
            ],
        ];

        return view('halamanadmin.formportofolio' , $data);
    }

    function create(Request $req){
        $this -> validate($req, [
            'tittle' => 'required|max:20',
            'category' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg'
        ]);

        Portofolio::create([
            'tittle' => $req->tittle,
            'category' => $req->category,
            'description' => $req->description,
            'foto' => $req->file('foto')->store('foto'),
        ]);


        return redirect('portofolio');
    }

    function delete($id){
        $portofolio = Portofolio::Where('id', $id)->first();
        $portofolio->delete();
        Storage::delete($portofolio->foto);

        // return Redirect::to("portofolio")->withSuccess('Success message');
        return redirect('portofolio');
    }

    function edit($id){
        $data['portofolio'] = Portofolio::find($id);
        $data['action'] = url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol'] = 'update';
        return view('halamanadmin.formportofolio', $data);
    }

    function update(request $req){
        $this -> validate($req, [
            'tittle' => 'required',
            'category' => 'required',
       ]);

        if ($req->file('foto')) {
            $portofolio = Portofolio::Where('id', $req->id)->first();
            Storage::delete($portofolio->foto);

            $file = $req->file('foto')->store('foto');
        
        }else {
            $file = DB::raw('foto');
        }

        Portofolio::Where('id', $req->id)->update([
            'tittle' => $req->tittle,
            'category' => $req->category,
            'description' => $req->description,
            'foto' => $file,
        ]);
        return redirect('portofolio');
   }

   
}   

