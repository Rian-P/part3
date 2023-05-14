@extends('dashboard.layouts.app')

@section('content')

 <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                    <!-- Button trigger modal -->
                    <a href="/tambah-pemesanan" class="btn btn-primary"><i class="fa-solid fa-list-check pr-2"></i>Tambah Pemesanan</a>
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
                          <tr>
                            <td>Search Engine Marketing</td>
                            <td class="font-weight-bold">$362</td>
                            <td>21 Sep 2018</td>
                            <td>21 Sep 2018</td>
                            <td>21 Sep 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                          </tr>
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