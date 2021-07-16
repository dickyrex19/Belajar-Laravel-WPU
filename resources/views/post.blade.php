@extends('layouts.main')

@section('container')
  <article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    {{-- dapat mengeksekusi html special char seperti tag p --}}
    {!! $post->body !!}
  </article>
  <a href="/posts">Back to Post</a>
@endsection