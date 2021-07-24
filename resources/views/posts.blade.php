@extends('layouts.main')
@section('container')
  <div class="mb-4 d-flex justify-content-between">
    <h2>All Blog Posts</h2>
    <a href="/categories"><h4>See All Category</h4></a>
  </div>

  @foreach ($posts as $post)
  <article>
    <h3>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h3>
    <p>{{ $post->excerpt }}</p>
  </article>
  @endforeach
@endsection