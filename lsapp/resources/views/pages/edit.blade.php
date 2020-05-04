@extends('layouts.app')

@section('content')
<h1>Edit data</h1>
{{-- <h1>{{$posts->id}}</h1> --}}
    {!! Form::open(['action' => ['PostController@update',$posts->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('firstname', 'firstname')}}
            {{Form::text('firstname','', ['class' => 'form-control', 'placeholder' => 'firstname'])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname', 'lastname')}}
            {{Form::text('lastname', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'lastname'])}}
        </div>
        <div class="form-group">
                {{Form::label('subject', 'subject')}}
                {{Form::text('subject', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'subject'])}}
            </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('edit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
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