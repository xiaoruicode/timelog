@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->post_title }}</h1>
    <h3>{{ $post->id }}</h3>
    <a href="{{ route('post.show', uuid_convert($post->post_id)) }}">{{ $post->post_id }}</a>
    <div class="">
{!! $post->post_content !!}
    </div>
</div>
@endsection
