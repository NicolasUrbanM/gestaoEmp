<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function aboutUs(){
       ## echo 'A soma dos parametros eh: ' . ($p1 + $p2); 
       
       //array associativa
       // return view('site.aboutUs', ['x' =>$p1 , 'y' =>$p2]);

       //COMPACT 
       return view('pages.aboutUs');


       //with
       //return view('site.aboutUs')->with($p1) ->with($p2);


    }
}
