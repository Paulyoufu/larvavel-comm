@extends("app")
@section('content')
    <div class="container">
        <div class="row">
           @include('forum.form')
                <div >
                    {!! Form::submit('发表贴子',['class'=>'btn btn-primary pull-right']) !!}

                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop