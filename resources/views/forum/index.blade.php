@extends('app')
@section('content')
        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron" style="background-color: #00C35E;">
            <div class="container" >
                <h2>lavravel App 社区
                    <a class="btn btn-lg btn-primary pull-right" href="/discussions/create" role="button" style="background-color: #C93842;">发布新帖子</a>
                </h2>

            </p>
            </div>
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-9" role="main">
           @foreach($discussions as $discussion).
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle" alt="64*64" src="{{ $discussion->user->avatar }}" style="height: 64px;width: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading" style="padding-top: 10px">

                        <a href="/discussions/{{ $discussion->id }}">{{ $discussion->title }}</a></h4>
                    {{ $discussion->user->name }}
                    <div class="media-conversation-meta">
                        <span class="media-conversation-replies">
                            <a href="/discussion/154#reply">{{ count($discussion->comments) }}</a>
                            回复
                        </span>
                    </div>
                    </h4>
                    {{ $discussion->user->name }}
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>
@stop