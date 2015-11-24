@extends('app')
@section('content')
        <!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h2>
            <a class="btn btn-lg btn-primary pull-right" href="../../components/#navbar" role="button">修改帖子</a>
        </h2>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object img-circle" alt="64*64" src="{{ $discussion->user->avatar }}" style="height: 64px;width: 64px;">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-body">{{ $discussion->title }}</h4>
                {{ $discussion->user->name }}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9" role="main">
            <div class="blog-post">
                {{ $discussion->body }}
            </div><!-- /.blog-post -->
        </div>
    </div>
</div>
@stop