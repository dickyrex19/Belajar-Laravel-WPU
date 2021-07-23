@extends('layouts.main')
@section('container')
  <h2 class="mb-4">Post Category : {{ $category }}</h2>
  @if ($posts->count() > 0)
    @foreach ($posts as $post)
    <article>
      <h3>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
      </h3>
      <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
  @else
    <h3 style="position: absolute; transform: translate(-50%, -50%); top: 50%; left:50%; color: red">Belum ada Post</h3>
  @endif
@endsection