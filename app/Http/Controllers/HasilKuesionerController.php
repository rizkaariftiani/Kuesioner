<?php

namespace App\Http\Controllers;
use App\HasilKuesioner;
use Illuminate\Http\Request;

class HasilKuesionerController extends Controller
{
    public function hasilkuesioner(){
        $kuesioner = HasilKuesioner::all();
        return view('hasilkuesioner',['kuesioner'=> $kuesioner]);
    }
    public function createkuesioner(Request $request) { 
        HasilKuesioner::create([ 
            'nim_mhs' => $request->nim_mhs, 
            'nama_mhs' => $request->nama_mhs,
            'kelas' => $request->kelas, 
            'no_abs' => $request->no_abs,
            'jwb1' => $request->jwb1,
            'jwb2' => $request->jwb2,
            'jwb3' => $request->jwb3,
            'jwb4' => $request->jwb4,
            'jwb5'=>$request->jwb5
        ]); 
        return redirect('/hasilkuesioner');      
    }
}
