<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Kontol (){
        return view('welcome');
    }
    public function Pepek (){
        return view('Index');
    }
    public function silit (){
        return view('cum');
    }
     public function herygay (){
        return view('dexstepgay');
    }
}
