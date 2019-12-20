<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elector;

class ElectorController extends Controller
{
    public function index(){
        return view('elector.validaciónElector');
    }

    public function store(Request $request){
        $elector = $request->dni;
        $Elector = Elector::findOrFail($elector);

            return view('elector.votación');

    }

}
