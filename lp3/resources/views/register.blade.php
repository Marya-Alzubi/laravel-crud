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
                <form class="" method="post" action="/students" enctype="multipart/form-data">
@csrf
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Full Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="fullname" id="name"  placeholder="Enter your Name" value="{{old('fullname')}}"/>
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
                                <input type="text" class="form-control" name="nid" id="nid"  placeholder="Enter your
                                National Number" value="{{old('nid')}}"/>
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
                                <input type="text" class="form-control" name="address" id="nid"  placeholder="Enter your
                                Address" value="{{old('address')}}"/>
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
                                <input type="text" class="form-control" name="mobile" id="nid"  placeholder="Enter your
                                mobile number" value="{{old('mobile')}}"/>
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
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" value="{{old('email')}}"/>
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
                                <input type="file" class="form-control" name="image" id="username" value="{{old('image')}}" />
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
