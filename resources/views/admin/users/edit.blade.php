@extends('layouts.admin')

@section('content')
    <h1>Edit Users</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{$user->photo? $user->photo->path : 'https://via.placeholder.com/150'}}" alt=""
                 class="img-responsive img-rounded">
        </div>

        <div class="col-sm-9">
            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',[''=>'Choose Option']+$roles,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_activ','Status:') !!}
                {!! Form::select('is_activ',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','File:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update User',['class'=>'btn btn-success col-sm-3']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::model($user,['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}


            <div class="form-group">
                {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-3']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>
    @include('includes.form_error')

@endsection