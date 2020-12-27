<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuesioner;
use App\NilaiKuesioner;

class KuesionerController extends Controller
{
    public function kuesioner(Request $request){
        $value = new NilaiKuesioner();
        $data['keterangan'] = $value-> keterangan;
        $data['kuesioner'] = $request->session()->get('kuesioner');
        return view('kuesioner', $data);

        $this->middleware('auth');

    }
    public function hasilkuesioner(){
        $kuesioner = Kuesioner::all();
        return view('hasilkuesioner',['kuesioner'=> $kuesioner]);

        $this->middleware(function($request, $next){
           if(Gate::allows('manage-articles')) return $next($request);
           abort(403, 'Anda tidak memiliki cukup hak akses');
       });

    }
    public function createkuesioner(Request $request) { 
        Kuesioner::create([ 
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

        $this->middleware(function($request, $next){
           if(Gate::allows('manage-articles')) return $next($request);
           abort(403, 'Anda tidak memiliki cukup hak akses');
       });

    }

}
