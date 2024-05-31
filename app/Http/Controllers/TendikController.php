<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama'      =>  'required|min:5',
            'jenkel'    =>  'required',
            'alamat'    =>  'required',
            'hp'        =>  'required',
            'bagian'    =>  'required',
            'email'     =>  'required',
            'foto'      =>  'required',
            'no_ktp'    =>  'required'
        ]);

        $tendik = Tendik::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $tendik->foto = $request->file('foto')->getClientOriginalName();
            $tendik->save();
        }

        if($request->hasFile('no_ktp')) {
            $request->file('no_ktp')->move('images/',$request->file('no_ktp')->getClientOriginalName());
            $tendik->no_ktp = $request->file('no_ktp')->getClientOriginalName();
            $tendik->save();
        }
        return redirect('/tendik')->with('status','Data Tendik Berhasil');
    }
    public function index()
    {
        $tendik = Tendik::all();
        return view('frontend.tendik.index',['tendik'=>$tendik]);
    }
    public function create()
    {
        return view('frontend.tendik.create');
    }
    
}
