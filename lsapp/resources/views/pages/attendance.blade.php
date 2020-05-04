@extends('layouts.app')

@section('content')
    <h1>Attendance</h1>
    @if(isset($student))
        <ul class="list-group list-group-horizontal-md">
            <h3>Name:{{$student->firstname}}&nbsp;{{$student->lastname}}</h3>
            <li class="list-group-item">id: {{$student->id}}</li>
            <li class="list-group-item">firstname: {{$student->firstname}}</li>
            <li class="list-group-item">lastname: {{$student->lastname}}</li>
            <li class="list-group-item">Enrolled on Date:{{$student->created_at}}</li>
            <li><a href="{{$student->id}}/edit" class="btn btn-default">Edit</a></li>
            {{-- <li><a href="{{view('pages.delete')}}" class="btn btn-default">Delete<a></li> --}}
            {{-- <li class="list-group-item">{{$student->updated_at}}</li> --}}
        </ul>
        @else
        <h2>"No data found"</h2>
     @endif
@endsection