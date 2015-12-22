@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ Auth::user()->avatar }}" width="50" class="img-circle" alt="">
                {!! Form::open(['url'=>'/avatar','files'=>true]) !!}
                {!! Form::file('avatar') !!}
                {!! Form::submit('上传头像',['class'=>'btn btn-sucess pull-right']) !!}

            </div>
        </div>
    </div>
@stop
