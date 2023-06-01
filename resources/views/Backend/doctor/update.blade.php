@extends('Backend.Adminlayout.app')
@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->

    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="sub-title">Doctor Detail</h4>
                                    <form  action="{{route('admin.update.doctor')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$doctor->id}}">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Doctor Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" value="{{$doctor->name}}" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Departement</label>
                                            <div class="col-sm-10">
                                                <select name="depart_id" class="form-control" required>
                                                    <option value="{{$doctor->getDepart->id}}">{{$doctor->getDepart->depart}}</option>
                                                    @foreach ($departs as  $depart)
                                                    <option value="{{$depart->id}}">{{$depart->depart}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control"value="{{$doctor->email}}" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" class="form-control"value="{{$doctor->phone}}" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address" class="form-control" value="{{$doctor->address}}"required/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="password" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload File</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-success btn-round waves-effect waves-light" style="margin-left:19%">update</button>
                                        </div>
                                      </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection

