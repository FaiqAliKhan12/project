@extends('Backend.Adminlayout.app')
@section('content')
  
  <!-- Hover table card start -->
  <div class="card">
    <div class="card-header">
        <h5>Patients List</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                <li><i class="fa fa-window-maximize full-card"></i></li>
                <li><i class="fa fa-minus minimize-card"></i></li>
                <li><i class="fa fa-refresh reload-card"></i></li>
                <li><i class="fa fa-trash close-card"></i></li>
            </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                       
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Phone</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Hover table card end -->
@endsection