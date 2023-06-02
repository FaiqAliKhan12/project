@extends('Backend.Adminlayout.app')
@section('content')
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
                                <h4 class="sub-title">Depart Detail</h4>
                                <form  action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Department</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" placeholder="Type your title in Placeholder" required/>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Textarea</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" cols="5" class="form-control"
                                            placeholder="Default textarea"></textarea>
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