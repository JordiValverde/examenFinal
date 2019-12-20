<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elector;

class ElectorController extends Controller
{
    public function index(){
        return view('elector.validaciónElector');
    }

    private function store(Request $request){
        $nota = new Elector();
        $nota->nombre = $request->nombre;
        $nota->descripcion = $request->descripcion;
        $nota->usuario = auth()->user()->email;
        $nota->save();

        return view('elector.votación')->with('mensaje', 'validado!');

    }

    public function singleton(){
        $Elector = null;
        if($Elector==null){
            $elector = new ElectorController();
        }

        return $Elector;
    }

}
