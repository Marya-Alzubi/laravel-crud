@extends('layout.master')

@section('cssFiles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}" >
@endsection

@section('title')
    Table
@endsection


@section('content')
    <div class="container">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                <th>Id</th>
                <th>Full Name</th>
                <th>NID</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Image</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->fullname}}</td>
                        <td>{{$student->nid}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->mobile}}</td>
                        <td>{{$student->email}}</td>
                        <td><img src="{{asset("images/$student->image")}}" style="width:200px; heightL200px" ></td>
                        <td>{{$student->created_at}}</td>
                        <td> <a href="students/{{$student->id}}/edit">
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                            </a></td>

                        <form method="post" action="/students/delete/{{$student->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete">
                                    <button class="btn btn-danger btn-xs" value="DELETE" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                        <span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
