@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" role="main">
                {!! Form::open(['url'=>'/user/register']) !!}
                <!-- name field-->
                <div class="form-group">
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                </div>
                <!-- email field-->
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',null,['class' => 'form-control']) !!}
                </div>

                <!-- password field-->
                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation','Password_confirmation') !!}
                    {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('注册',['class'=>'btn btn-primary btn-lg btn-block form-controll']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop