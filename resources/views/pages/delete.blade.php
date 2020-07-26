@extends('layouts.app')
@section('content')
{!! Form::open(['action' => ['PostController@destroy','id'], 'method' => 'DELETE', 'enctype' => 'multipart/form-data']) !!}
 <h1>Deleting a record</h1>
 <div class="form-group">
     {{Form::label('id', 'Enter the id')}}
     {{Form::text('id','', ['class' => 'form-control', 'placeholder' => 'id'])}}
 </div>
 {{Form::hidden('_method','DELETE')}}
 {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@if(session('success'))
            <div class="alert alert-success">
                <p>Data deleted successfully</p>
            </div>
    @endif
    @if(session('error'))
            <div class="alert alert-danger">
                <p>Data not deleted</p>
            </div>
@endif
@endsection