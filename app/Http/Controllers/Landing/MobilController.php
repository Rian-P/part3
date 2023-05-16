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

   public function mobilDetail(Mobil $mobil)
{
    $detail_kendaraan = $mobil;
    return view('landing.detail-mobil', compact('detail_kendaraan'));
}
   
   
}
