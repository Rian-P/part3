@extends('landing.layouts.app')

@section('content')
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prapatan jaya trans</title>
        <link rel="icon" type="image/png" sizes="56x56" href="images/icon/iconbg.png" />
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class="bg-white">
        <section class="text-gray-600 font-inter">
            <div class="container mx-auto flex px-24 py-10 items-center justify-center flex-col">
                <img class="h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 " alt=""
                src="{{asset('images/mobil/'.$detail_mobil->image)}}"
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-24 pb-24 mx-auto flex flex-wrap items-center">
                <div class="lg:w-2/2 w-full lg:pl-10 lg:py-6 bg-white mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">{{$detail_mobil->nama_kendaraan}}</h1>
                    <p class="leading-relaxed my-4"> <span class="font-bold">{{$detail_mobil->type}}</span> {{$detail_mobil->tahun}} </p>
                    <p>{!!$detail_mobil->deskripsi_mobil!!}</p>
                </div>
            </div>

            <!-- Main modal -->
            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-2xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                informasi pembayaran tranfer
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="staticModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                With less than a month to go before the European Union enacts new consumer privacy laws for
                                its citizens, companies around the world are updating their terms of service agreements to
                                comply.
                            </p>
                            <label
                            for="formFile"
                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                            >Default file input example</label
                          >
                          <input
                            class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100"
                            type="file"
                            id="formFile" />
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="staticModal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                kirim bukti</button>
                              </div>
                    </div>
                </div>
            </div>


        </section>

<section class="mb-6">
    <div class="container  mx-auto flex items-center justify-center flex-col lg:w-4/6 md:w-1/2 bg-gray-300 shadow rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-blue-900 text-xl mx-auto font-bold title-font mb-5">-Booking-</h2>

    <form>
        <div class="flex items-center justify-center">
            <div class="relative mb-3 xl:w-96 bg-gray-50 " data-te-datepicker-init data-te-input-wrapper-init>
                <input type="text"
                    class="peer block bg-gray-50 min-h-[auto] w-full rounded border-0  py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    placeholder="Select a date" />
                <label for="floatingInput"
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">
                    pengambilan</label>
            </div>
            <div class="relative mb-3 xl:w-96 bg-gray-50 " data-te-datepicker-init data-te-input-wrapper-init>
                <input type="text"
                    class="peer bg-gray-50 block min-h-[auto] w-full rounded border-0 py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    placeholder="Select a date" />
                <label for="floatingInput"
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">
                    pengembalian</label>
            </div>
        </div>
        <div class="flex mb-2 items-center justify-center">
        <div class="relative  xl:w-96 bg-gray-50 " data-te-timepicker-init data-te-input-wrapper-init>
            <input type="text"
                class="peer block bg-gray-50  rounded border-0  py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="form1" />
            <label for="form1"
                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">pengambilan</label>
        </div>
        <div class="relative  xl:w-96 bg-gray-50  " data-te-timepicker-init data-te-input-wrapper-init>
            <input type="text"
                class="pee brlock  rounded border-0  bg-gray-50 py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="form1" />
            <label for="form1"
                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">pengembalian</label>
        </div>
        </div>
        <div class="mb-2 flex items-center ">

            <label for="kotatujuan"
                class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">kota tujuan</label>
            <input type="text" id="text"
                class="shadow-sm mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="contoh : tegal" required>
            <label for="mobil"
                class="block  mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">mobil</label>
            <input type="text" id="" disabled
                class="shadow-sm mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{$detail_mobil->nama_kendaraan}}" required>
        </div>
       
        <div class="mb-2 flex items-center ">
            <label for="type"
                class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
            <input type="text" id="" disabled
                class="shadow-sm mb2 mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{$detail_mobil->type}}" required>
            <label for="harga"
                class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">harga</label>
             <select id="countries" name="harga"
                class="bg-gray-50 mb-2 mr-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="required">
                <option value="">-- pilih harga --</option>
                <option value="{{$detail_mobil->harga_12_jam}}">{{$detail_mobil->harga_12_jam}}/12jam</option>
                <option value="{{$detail_mobil->harga_24_jam}}">{{$detail_mobil->harga_24_jam}}/24jam</option>
            </select>
        </div>
     
        <div class="mb-2 flex items-center">
            <label for="dp"
                class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">dp</label>
            <input type="text" id=""
                class="shadow-sm mb-2 mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="contoh : minimal 100" required>
            <label for="dp"
                class="block mb-2 mr-2 text-sm font-medium text-gray-900 dark:text-white">sopir</label>
            <select id="countries" name="sopir"
                class="bg-gray-50 mb-2 mr-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="required">
                <option value="">-- pilih sopir atau tidak --</option>
                <option value="iya">iya</option>
                <option value="tidak">tidak</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300"> foto ktp
                <div class="flex flex-col items-center justify-center pt-7">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                        Select a photo</p>
                </div>
                <input type="file" class="opacity-0" />
            </label>
        </div>
        
        <button data-modal-target="staticModal" data-modal-toggle="staticModal" type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            pesan sekarang</button>
    </form>
    </div>
</section>
    </body>

    </html>
@endsection
