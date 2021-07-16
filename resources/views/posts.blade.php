@extends('layouts.main')
@section('container')
  <h2 class="mb-4">Halaman Blog Posts</h2>
  @foreach ($posts as $post)
  <article>
    <h3>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h3>
    <p>{{ $post->excerpt }}</p>
  </article>
  @endforeach
@endsection