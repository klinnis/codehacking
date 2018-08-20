@extends('layouts.admin')


@section('content')



    <h1>Create Post</h1>


    {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store','files'=>true]) !!}

        <div class="form-group">
               {!! Form::label('tittle','Tittle:') !!}
               {!! Form::text('tittle',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',array(''=>'Choose Category'),null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('body','Description:') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn-btn-primary'])!!}
        </div>

    {!! Form::close() !!}


    <div class="row">

    @if(count($errors)>0)


        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as  $error)
                    <li>{{$error}}</li>

                @endforeach

            </ul>

        </div>


    @endif

    </div>



@stop