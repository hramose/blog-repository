@extends('layouts.homePublicTemplate')

@section('title', 'View Post #' . $id)

@section('content')
  <div class="row">
    <a href="http://tutvids.com/laravel/blog/public">Go to Home</a>
  </div>
  <div id="postContent" class="row">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
  </div>
  
  <div class="row text-center" id="facebookCommentContainer">
    <div class="fb-comments" data-href="{{ Request::url() }}" data-width="800" data-numposts="10"></div>
  </div>
@endsection