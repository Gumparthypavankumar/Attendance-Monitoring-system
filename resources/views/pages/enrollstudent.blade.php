@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <h1>Enrolling student</h1>
    <div class="form-group">
        {{Form::label('firstname', 'firstname')}}
        {{Form::text('firstname','', ['class' => 'form-control', 'placeholder' => 'firstname'])}}
        @error('firstname')
          <span class="invalid-feedback text-danger" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="form-group">
        {{Form::label('lastname', 'lastname')}}
        {{Form::text('lastname', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'lastname'])}}
        @error('lastname')
          <span class="invalid-feedback text-danger" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="form-group">
            {{Form::label('subject', 'subject')}}
            {{Form::text('subject', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'subject'])}}
            @error('subject')
              <span class="invalid-feedback text-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
    {{Form::hidden('_method','POST')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@if(session('success'))
    <div class="alert alert-success">
        <p>Data Inserted successfully</p>
    </div>
@endif

@endsection
