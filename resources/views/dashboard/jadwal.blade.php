@extends('dashboard.layouts.app')

@section('content')

 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4>Jadwal</h4>
                    <div id='calendar'></div>
             </div>
         </div>
     </div>
</div>

<script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        defaultView: 'month',
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        events: [
          {
            title: 'Makan Siang',
            start: '2023-05-07T12:30:00',
            end: '2023-05-07T13:30:00'
          },
          {
            title: 'Pertemuan dengan Klien',
            start: '2023-05-12T14:00:00',
            end: '2023-05-12T15:30:00'
          },
          // tambahkan acara lain di sini
        ]
      });
    });
  </script>
  

           
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