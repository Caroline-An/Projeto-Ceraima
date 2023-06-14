<?php

namespace App\Http\Controllers;

use App\Models\Patrimonio;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    public function create(){
        return view('patrimonios.create');
    }
    
    public function cadastrar(Request $request, Patrimonio $patrimonios){
        $data = $request->all();
        $data['nomePatrimonio'] = 'a';

        $patrimonios = $patrimonios->create($data);
        dd($patrimonios);

        return redirect()->route(('item.show'));
    }





    public function index(){
        $patrimonios = Patrimonio::all();
        //return view('patrimonios.index',compact('Patrimonio'));
        return view('patrimonios.index', ['patrimonios'=>$patrimonios]); //passa objeto
    }

    public function edit($id){
        $Patrimonio = Patrimonio::findorFail($id);
        return view('patrimonios.edit',['Patrimonio'=>$Patrimonio]);
    }
    
    //
    public function show(){
        $patrimonios = Patrimonio::all();
        echo $patrimonios;
    }

    
}
