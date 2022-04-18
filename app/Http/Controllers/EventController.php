<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    function home(){
        return view('welcome');
    }

    function produtos(){
        return view('produtos');
    }
    
    function videos(){
        return view('videos');
    }

    function contato(){
        return view('contato');
    }

    function autocenter(){
        return view('auto-center');
    }

    function sair(){
        return view('dashboard');
    }
}
