@extends('Backend.Adminlayout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Appointments</h5>
        {{-- <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                <li><i class="fa fa-window-maximize full-card"></i></li>
                <li><i class="fa fa-minus minimize-card"></i></li>
                <li><i class="fa fa-refresh reload-card"></i></li>
                <li><i class="fa fa-trash close-card"></i></li>
            </ul>
        </div> --}}
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor Name</th>
                        <th>Depart</th>
                        <th>Date</th>
                        <th>Time</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments  as $appointment )
                    {{-- {{dd($appointment->getDepart->depart)}} --}}
                    <tr>
                        {{-- <th scope="row"><div><img src="{{(Auth::check() && $appointment->getDoctor()->image != '')? asset('images/'.$appointment->getDoctor()->image): asset('images/defualt_user.jpg')}}" alt="" style="width: 50px; height:50; border-radius:50%"></div> --}}
                    </th>
                        <td>{{$appointment->pt_name}}</td>
                        <td>{{$appointment->pt_email}}</td>
                        <td>{{$appointment->pt_phone}}</td>
                        <td>{{$appointment->getDoctor->name}}</td>
                        <td>{{$appointment->getDepart->depart}}</td>
                        <td>{{$appointment->app_date}}</td>
                        <td>{{$appointment->app_time}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
