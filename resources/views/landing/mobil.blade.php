@extends('landing.layouts.app')

@section('content')
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prapatan jaya trans</title>
        <link rel="icon" type="image/png" sizes="56x56" href="images/icon/iconbg.png" />
    </head>

    <body class="">

        <section class="font-inter">
            <div class="container px-24 pt-16 pb-6 mx-auto">
                <div class="flex flex-wrap w-full ">
                    <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                        <div class="w-full md:w-2/3 flex flex-col mb-10 items-center text-center">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900">DAFTAR Mobil</h1>
                            <p class=" leading-relaxed  text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id, dolore at animi ad inventore cupiditate.</p>
                        </div>
                    </div>
                    <div class="flex w-full justify-center items-end">
                        <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                            <input type="text" id="hero-field" name="hero-field" placeholder="Cari mobil Disini"
                                class="w-full bg-gray-100 bg-opacity-50 rounded-lg focus:ring-2 focus:ring-yellow-200 focus:bg-transparent border border-gray-300 focus:border-yellow-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <button
                            class="inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none rounded-lg text-lg">cari
                            mobil</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-40 py-10 mx-auto">
                <div class="flex flex-wrap -m-4 text-center">
                    <div class="p-2 md:w-1/3 sm:w-1/2 ">
                        <div class="border-2 border-gray-200 px-2 py-4 rounded-lg">
                            <a href="#" class="text-base ">Matic</a>
                        </div>
                    </div>
                    <div class="p-2 md:w-1/3 sm:w-1/2">
                        <div class="border-2 border-gray-200 px-2 py-4 rounded-lg">
                            <a href="#" class="leading-relaxed">Manual</a>
                        </div>
                    </div>
                    <div class="p-2 md:w-1/3 sm:w-1/2 ">
                        <div class="border-2 border-gray-200 px-2 py-4 rounded-lg">
                            <a href="#" class="leading-relaxed">Bus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                @foreach($kendaraan as $row)
                <a href="/detail/{{$row->id_mobil}}/{{$row->nama_kendaraan}}">
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                  <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="{{asset('storage/image/kendaraan/'.$row->image)}}" >
                  </div>
                  
                  <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                      <a class="no-underline hover:underline text-black" href="#">
                        {{ $row->nama_kendaraan }}
                      </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                     Rp.  {{ $row->harga_24_jam }} /24jam
                    </p>
                    
                  </header>
                  <p class="text-base leading-relaxed mt-2">tipe mobil : {{ $row->tipe}}</p>
                  <p class="text-base leading-relaxed mt-2">kapasitas penumpang : {{ $row->max_penumpang }}</p>
                  <p class="text-base leading-relaxed mt-2">tahun mobil : {{ $row->tahun }}</p>
                </div>
            </a>
                @endforeach
              </div>
            </div>
          </section>

    </body>

    </html>
@endsection
