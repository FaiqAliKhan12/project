@extends('Backend.Adminlayout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Department List</h5>
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
                        <th>Department</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departs as $depart )
                    <tr>
                        <td>{{$depart->depart}}</td>
                        <td>{{$depart->description}}</td>
                        <td> <a href="{{route('admin.edit.depart',[$depart->id])}}">Edit</a> &nbsp; &nbsp; <a href="{{route('admin.destroy.depart',[$depart->id])}}">delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
