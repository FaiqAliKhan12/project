@extends('Backend.Adminlayout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Doctor List</h5>
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
                        <th>image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients  as $patient )
                    <tr>
                        <th scope="row">
                        <div><img src="{{(Auth::check() && $patient->image != '')? asset('images/'.$patient->image): asset('images/defualt_user.jpg')}}" alt="" style="width: 50px; height:50; border-radius:50%"></div>
                    </th>
                        <td>{{$patient->name}}</td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->phone}}</td>
                        <td>{{$patient->address}}</td>

                        <td><a href="{{route('admin.edit.patient',[$patient->id])}}">Edit</a> &nbsp; &nbsp; <a href="{{route('admin.delete.doctor',[$patient->id])}}">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
