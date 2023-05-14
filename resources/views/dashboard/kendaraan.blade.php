@extends('dashboard.layouts.app')

@section('content')

 <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                    <!-- Button trigger modal -->
                    <a href="/tambah-kendaraan" class="btn btn-primary"><i class="fa-solid fa-car pr-2"></i>Tambah Kendaraan</a>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>No Kendaraan</th>
                            <th>Nama Kendaraan</th>
                            <th>Tipe</th>
                            <th>Harga 12 Jam</th>
                            <th>Harga 24 Jam</th>
                          </tr>  
                        </thead>
                        <tbody>
                        @foreach($kendaraan as $kendaraan)
                          <tr>
                            <td>
                              <img src="{{asset('storage/image/kendaraan/'.$kendaraan->image)}}" alt="Image Kendaraan" width="100px" height="100px">
                            </td>
                            <td class="font-weight-bold">{{$kendaraan->nama_kendaraan}}</td>
                            <td>{{$kendaraan->no_kendaraan}}</td>
                            <td>{{$kendaraan->tipe}}</td>
                            <td>{{$kendaraan->harga_12_jam}}</td>
                            <td>{{$kendaraan->harga_24_jam}}</td>
                          </tr>
                        @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
           
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        
@endsection