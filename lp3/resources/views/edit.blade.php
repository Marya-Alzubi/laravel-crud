@extends('layout.master')

@section('cssFiles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('title')
    register

@endsection


@section('content')

    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h5>Sign up once and watch any of our free demos.</h5>
                <form class="" method="post" action=/students/{{$student->id}}" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Edit the Full Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="fullname" id="name"  value="{{$student->fullname}}"/>
                            </div>
                        </div>
                        @error("fullname")
                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your NID</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nid" id="nid" value="{{$student->nid}}" placeholder="Enter your
                                National Number"/>
                            </div>
                        </div>
                        @error("nid")
                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Address</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="address" id="nid" value="{{$student->address}}"  placeholder="Enter your
                                Address"/>
                            </div>
                        </div>
                        @error("address")
                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Mobile</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="mobile" id="nid" value="{{$student->mobile}}" placeholder="Enter your
                                mobile number"/>
                            </div>
                        </div>
                        @error("mobile")
                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email" value="{{$student->email}}" placeholder="Enter your Email"/>
                            </div>
                        </div>
                        @error("email")
                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">ID Card image</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="file" class="form-control" name="image" id="username"  />
                            </div>
                        </div>
                        @error("image")
                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group ">
                        <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary
                     btn-block btn-lg" tabindex="7"></div>

                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
