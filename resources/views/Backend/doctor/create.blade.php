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
                                    <form  action="{{route('admin.store.doctor')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Doctor Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" placeholder="type name here" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Departement</label>
                                            <div class="col-sm-10">
                                                <select name="depart_id" class="form-control" required>
                                                    <option value="opt1">Select One Value Only</option>
                                                    @foreach ($departs as  $depart)
                                                    <option value="{{$depart->id}}">{{$depart->depart}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control"placeholder="type email here" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" class="form-control"placeholder="type phone no here" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address" class="form-control" placeholder="type address here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control"placeholder="type password here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Upload File</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-success btn-round waves-effect waves-light" style="margin-left:19%">Save</button>
                                        </div>
                                      </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection

