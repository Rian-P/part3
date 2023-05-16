@extends('dashboard.layouts.app')

@section('content')

 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Kendaraan</th>
                            <th>Sopir</th>
                            <th>Tanggal Ambil</th>
                            <th>Tanggal Kembali</th>
                            <th>Waktu</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                          </tr>  
                        </thead>
                        <tbody>
                        @foreach($jadwal as $jadwal)
                          <tr>
                            <td>
                              {{$jadwal->nama_pelanggan}}
                            </td>
                            <td> {{$jadwal->nama_kendaraan}}</td>
                            <td class="font-weight-bold">{{$jadwal->sopir}}</td>
                            <td>{{$jadwal->tanggal_ambil}}</td>
                            <td>{{$jadwal->tanggal_kembali}}</td>
                            <td>{{$jadwal->waktu_kembali}}</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Rp.{{$jadwal->total_harga}}</div></td>  
                            <td>
                              <a href="/print/{{$jadwal->id_pemesanan}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-pdf"></i></a>
                            </td>   
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