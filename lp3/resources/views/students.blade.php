@extends('layout.master')

@section('cssFiles')
    <link href="{{ asset('css/students.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('title')
    Students

@endsection


@section('content')

    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                @foreach($students as $student)
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="{{asset("images/$student->image")}}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>{{$student->fullname}}</h4>
                                <p class="text-muted"> <span>| </span><span><a href="#" class="text-pink">{{$student->email}}</a></span></p>
                            </div>
                        <a href="/students/{{$student->id}}"><button  type="button"  class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View </button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
