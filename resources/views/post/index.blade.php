@extends('layout.default')
@section('content')
    @if ( ! $posts->count() )
        You have no posts
    @else
        <ul>
            @foreach( $posts as $post )
                <li><a href="{{ route('post.show', $post->id) }}">{{ $post->text }}</a></li>
            @endforeach
        </ul>
    @endif
@stop