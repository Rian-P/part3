<?php

namespace App\Http\Controllers\Landing;
use App\Models\Mobil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       // Mengambil data dari model Card
        $mobil = Mobil::all();
        
         // Mengecek apakah terdapat kata kunci pencarian dalam request
         if ($request->has('search')) {
             $search = $request->input('search');
 
             // Melakukan pencarian berdasarkan judul atau deskripsi card
             $cards = mobil::where('nama_kendaraan', 'like', '%' . $search . '%')
                 ->orWhere('type', 'like', '%' . $search . '%')
                 ->get();
         }
 
         // Menampilkan view cards.blade.php dengan mengirimkan data $cards
         return view('landing.home', compact('mobil'));
     
        
    }
    public function mobilDetail(mobil $mobil)
    {
     $detail_mobil = $mobil;
       return view('landing.detail-mobil',compact('detail_mobil'));
    }
   

}
