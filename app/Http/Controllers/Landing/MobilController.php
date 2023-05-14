<?php

namespace App\Http\Controllers\Landing;


use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
   
   public function index()
   {
      $mobil = Mobil::all();
      return view('landing.mobil',compact('mobil'));
   }

   public function mobilDetail(mobil $mobil)
    {
        $detail_mobil = $mobil;
        return view('landing.detail-mobil', compact('detail_mobil'));
    }
   
   
}
