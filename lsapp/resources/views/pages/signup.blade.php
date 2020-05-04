{{-- @extends('layouts.app')
@section('content') --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('APP.name','lsapp')}}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
		{!! Form::open(['action' => 'LoginController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('firstname', 'firstname')}}
			{{Form::text('firstname','', ['class' => 'form-control', 'placeholder' => 'firstname'])}}
		</div>
		<div class="form-group">
			{{Form::label('lastname', 'lastname')}}
			{{Form::text('lastname', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'lastname'])}}
		</div>
		<div class="form-group">
				{{Form::label('email', 'email')}}
				{{Form::text('email', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'email'])}}
		</div>
		<div class="form-group">
				{{Form::label('password', 'password')}}
				{{Form::text('password', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'password'])}}
		</div>
		{{Form::hidden('_method','POST')}}
		{{Form::submit('submit', ['class'=>'btn btn-primary'])}}
		{!! Form::close() !!}
{{-- @endsection --}}
		@if(session('success'))
			<div class="alert alert-success">
                <p>Registered successfully</p>
            </div>
		@elseif(session('error'))
			<div class="alert alert-danger">
                <p>Not Registered</p>
            </div>
		@endif
	</body>
</html>