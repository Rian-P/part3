<?php

namespace App\Http\Controllers\Landing;
use App\Models\Mobil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
         return view('landing.home');    
    }
    
    public function mobilDetail(mobil $mobil)
    {
       $detail_mobil = $mobil;
       return view('landing.detail-mobil',compact('detail_mobil'));
    }
   

}
