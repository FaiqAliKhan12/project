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
                        <th>specialist</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors  as $doctor )
                    <tr>
                        <th scope="row">
                        <div><img src="{{asset('images/'.$doctor->image)}}" alt="" style="width: 50px; height:50; border-radius:50%"></div>
                    </th>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->email}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->address}}</td>
                        <td>{{$doctor->getDepart->depart}}</td>
                        <td><a href="{{route('admin.edit.doctor',[$doctor->id])}}">Edit</a> &nbsp; &nbsp; <a href="{{route('admin.delete.doctor',[$doctor->id])}}">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
