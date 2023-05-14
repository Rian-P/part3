@extends('dashboard.layouts.app')

@section('content')

 <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Tambah Data Pemesan</strong></h5>
                    </div>
                    <form action="" class="form-car pt-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required>
                          </div> 
                          <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Kendaraan</label>
                                    <select class="form-select" aria-label="Default select example" required>
                                      <option selected disabled value="">-- Pilih Tipe Kendaraan --</option>
                                      <option value="Admin">Admin</option>
                                      <option value="SOpir">Sopir</option>
                                      <option value="User">User</option>
                                    </select>
                                  </div>  
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tujuan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tujuan" required>
                                  </div> 
                            </div>
                          </div> 
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Sopir</label>
                            <select class="form-select" aria-label="Default select example" required>
                               <option selected disabled value="">-- Pilih Sopir --</option>
                                <option value="Admin">Admin</option>
                                <option value="SOpir">Sopir</option>
                                <option value="User">User</option>
                            </select>
                         </div> 
                         <div class="row">
                            <div class="col">
                                 <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Ambil</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tujuan" required>
                                  </div> 
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tujuan" required>
                                  </div> 
                            </div>
                        </div> 
                         <div class="row">
                            <div class="col">
                                 <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jam Pengambilan</label>
                                    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Tujuan" required>
                                  </div> 
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jam Pengembalian</label>
                                    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="Tujuan" required>
                                  </div> 
                            </div>
                        </div> 
                        <div class="row">
                          <div class="col-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Foto KTP</label>
                              <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required>
                          </div> 
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Bukti Transfer</label>
                              <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required>
                          </div>
                          </div>
                        </div>
                      
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk mr-2"></i>Simpan</button>    
                    </form>
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