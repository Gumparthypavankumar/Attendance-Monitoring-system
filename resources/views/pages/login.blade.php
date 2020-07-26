@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Login</h2>
        {!! Form::open(['action' => ['LoginController@create'], 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
		<div class="form-group">
				{{Form::label('email', 'email')}}
				{{Form::text('email', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'email'])}}
		</div>
		<div class="form-group">
				{{Form::label('password', 'password')}}
				{{Form::text('password', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'password'])}}
		</div>
		{{Form::hidden('_method','GET')}}
		{{Form::submit('submit', ['class'=>'btn btn-primary'])}}
		{!! Form::close() !!}
    </div>
@endsection
    