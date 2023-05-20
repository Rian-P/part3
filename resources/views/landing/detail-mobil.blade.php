@extends('landing.layouts.app')

@section('content')
    
<!DOCTYPE html>
<html>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prapatan jaya trans</title>
        <link rel="icon" type="image/png" sizes="56x56" href="images/icon/iconbg.png" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </head>

    <body class="bg-gray-200">
        
{{-- formulir penyewaan detail-mobil  --}}
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-col">
        <div class="lg:w-4/6 mx-auto">
          <div class="rounded-lg overflow-hidden">
            <img class="h-auto max-w-full" alt=""
              src="{{asset('storage/image/kendaraan/'.$detail_kendaraan->image)}}">
          </div>
          <div class="flex flex-col sm:flex-row mt-10">
            <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
              <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-10 h-10" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex flex-col items-center text-center justify-center">
                <h1 class="text-black-900 text-3xl title-font font-medium mb-2">{{$detail_kendaraan->nama_kendaraan}}</h1>
                <p class="leading-relaxed my-4"> <span class="font-bold">{{$detail_kendaraan->max_penumpang}}</span>Penumpang</p>
                <p>{!!$detail_kendaraan->deskripsi!!}</p>
              </div>
            </div>
          <div class="sm:w-4/6 sm:pl-10 sm:py-10 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-center">
                  <div class="w-full max-w-lg">
                    <h2 class="text-center pb-4 text-3xl font-bold">Ayo Booking Disini!</h2>
                    <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
                      <form action="/booking" class="space-y-4" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                          <label for="nama_pelanggan" class="block text-gray-700 font-bold text-lg mb-2">Nama</label>
                          <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama" required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg">
                        </div>
                        <div class="mb-4">
                          <label for="tujuan" class="block text-gray-700 font-bold text-lg mb-2">Tujuan</label>
                          <input type="text" name="tujuan" id="tujuan" placeholder="Tujuan" required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg">
                        </div>
                        <div class="mb-4">
                          <label for="sopir" class="block text-gray-700 font-bold text-lg mb-2">Opsi Sopir</label>
                          <select name="sopir" id="sopir" required
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg">
                            <option selected disabled value="">-- Opsi Sopir --</option>
                            <option value="Iya">Iya</option>
                            <option value="Tidak">Tidak</option>
                          </select>
                        </div>
                        <div class="flex space-x-4">
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="nama_kendaraan" class="block text-gray-700 font-bold text-lg mb-2">Nama Kendaraan</label>
                              <input type="text" name="nama_kendaraan" id="nama_kendaraan" value="{{$detail_kendaraan->nama_kendaraan}}"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Nama Kendaraan" required>
                            </div>
                          </div>
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="harga_sewa" class="block text-gray-700 font-bold text-lg mb-2">Harga Sewa</label>
                              <input type="text" id="harga_sewa" name="harga_sewa" value="{{$detail_kendaraan->harga_24_jam}}"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Harga Sewa" required>
                            </div>
                          </div>
                        </div>
                        <div class="flex space-x-4">
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="tanggal_ambil" class="block text-gray-700 font-bold text-lg mb-2">Tanggal Ambil</label>
                              <input type="date" id="tanggal_ambil" name="tanggal_ambil" min="<?= date('Y-m-d') ?>"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Tanggal Ambil" required>
                            </div>
                          </div>
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="tanggal_kembali" class="block text-gray-700 font-bold text-lg mb-2">Tanggal Pengembalian</label>
                              <input type="date" id="tanggal_kembali" name="tanggal_kembali" min="<?= date('Y-m-d') ?>"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Tanggal Kembali" onchange="hitungTotalHarga()" required>
                            </div>
                          </div>
                        </div>
                        <div class="flex space-x-4">
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="waktu_ambil" class="block text-gray-700 font-bold text-lg mb-2">Jam Pengambilan</label>
                              <input type="time" id="waktu_ambil" name="waktu_ambil"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Jam Pengambilan" onchange="setKembali()" required>
                            </div>
                          </div>
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="waktu_kembali" class="block text-gray-700 font-bold text-lg mb-2">Jam Pengembalian</label>
                              <input type="time" id="waktu_kembali" name="waktu_kembali"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Jam Pengembalian" required>
                            </div>
                          </div>
                        </div>
                        <div class="flex space-x-4">
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="total_harga" class="block text-gray-700 font-bold text-lg mb-2">Harga Total</label>
                              <input type="text" name="total_harga" id="total_harga"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Harga Total" readonly required>
                            </div>
                          </div>
                        </div>
                        <div class="flex space-x-4">
                          <div class="w-1/2">
                            <div class="mb-4">
                              <label for="foto_ktp" class="block text-gray-700 font-bold text-lg mb-2">Foto KTP</label>
                              <input type="file" name="foto_ktp" id="foto_ktp"
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg"
                                placeholder="Foto KTP" required>
                            </div>
                          </div>
                        </div>
              
                        <div class="flex justify-center">
                          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <i class="fa-solid fa-floppy-disk mr-2"></i> Booking
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>
 
  
  
</body>
</html>
@endsection


<script>
  function hitungTotalHarga() {
      const hargaSewa = document.getElementById('harga_sewa').value;
      const tanggalAwal = new Date(document.getElementById('tanggal_ambil').value);
      const tanggalAkhir = new Date(document.getElementById('tanggal_kembali').value);

      const selisihHari = Math.round((tanggalAkhir - tanggalAwal) / (1000 * 60 * 60 * 24));
      document.getElementById('total_harga').value = hargaSewa * selisihHari;
  }

function setKembali() {
    var ambil = document.getElementById("waktu_ambil").value;
    var ambilTime = new Date("1970-01-01T" + ambil + ":00");
    var kembaliTime = new Date(ambilTime.getTime());
    var kembali = kembaliTime.toTimeString().slice(0, 5);
    document.getElementById("waktu_kembali").value = kembali;
  }
 
</script>