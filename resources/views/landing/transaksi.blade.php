@extends('landing.layouts.app')

@section('content')
    <!-- hero -->
    <section class="text-black-600 body-font my-16 mx-auto px-5 md:max-w-6xl">
        <div class="text-xl">
            <p>Transaksi </p>

        </div>
        @if (count($data) > 0)
        <table class="w-4/5 text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mobil
                    </th>
                    <th scope="col" class="px-6 py-3">
                        waktu pengambilan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        waktu pengembalian
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Invoice
                    </th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($data as $data)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$data->nama_pelanggan}}
                    </th>
                    <td class="px-6 py-4">
                         {{$data->nama_kendaraan}}
                    </td>
                    <td class="px-6 py-4">
                         {{$data->tanggal_ambil}}
                    </td>
                    <td class="px-6 py-4">
                       {{$data->tanggal_kembali}}
                    </td>
                    <td class="px-6 py-4">
                         Rp. {{$data->total_harga}}
                    </td>
                    <td class="px-6 py-4 text-right">
                     @if($data->status == null)
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Menunggu Persetujuan</a>
                     @else
                         <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Disetujui</a>
                    @endif         
                    </td>
                     <td class="px-6 py-4">
                       <a href="/print/{{$data->id_pemesanan}}">Download Invoice</a>
                    </td>
                </tr>
            @endforeach
            @else
                <p>Belum ada pemesanan yang ditambahkan.</p>
            @endif
              


            </tbody>
        </table>
        </div>
    </section>
    <!-- hero -->
    <!-- component -->
    <section>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


    </section>
@endsection
