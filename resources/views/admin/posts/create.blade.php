@extends('layouts.admin')

@section('content')
    <h1>Create Posts</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Post Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Choose Option']+$categories,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','File:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Description:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Post',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.form_error')

    @endsection