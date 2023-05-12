
@extends('landing.layouts.app')

@section('content')
   <!-- hero -->
   <section class="text-black-600 body-font my-16 mx-auto px-5 md:max-w-6xl">
    <div class="text-xl">
    <p>transaksi </p>
    
    </div>
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
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">diterima</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ryan
                </th>
                <td class="px-6 py-4">
ayla
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">diterima</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ryan
                </th>
                <td class="px-6 py-4">
ayla
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    09/03/2023
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">diterima</a>
                </td>
            </tr>
           
           
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