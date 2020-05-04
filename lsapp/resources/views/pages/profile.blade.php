@extends('layouts.app')

@section('content')
    @if(count($posts)>= 1)
         @foreach($posts  as $data)
         <ul class="list-group list-group-horizontal-md">
                <h3>Name:<a href="posts/{{$data->id}}">{{$data->firstname}}&nbsp;{{$data->lastname}}</a></h3>
                <li class="list-group-item">id: {{$data->id}}</li>
                <li class="list-group-item">firstname: {{$data->firstname}}</li>
                <li class="list-group-item">lastname: {{$data->lastname}}</li>
                <li class="list-group-item">Enrolled on Date:{{$data->created_at}}</li>
                {{-- <li class="list-group-item">{{$data->updated_at}}</li> --}}
              </ul>
        @endforeach 
    @else
        <h1>"No data found"</h1>
    @endif
    @if(session('success'))
            <div class="alert alert-success">
                <p>Data updated successfully</p>
            </div>
    @endif
    @if(session('error'))
            <div class="alert alert-danger">
                <p>Data not updated</p>
            </div>
    @endif
@endsection