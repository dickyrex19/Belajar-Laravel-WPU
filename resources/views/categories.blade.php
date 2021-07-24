@extends('layouts.main')
@section('container')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
      <li class="breadcrumb-item active" aria-current="page">Categories</li>
    </ol>
  </nav>
  <h2 class="mb-4">Post Categories</h2>
  @foreach ($categories as $category)
  <ul>
    <li>
      <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
    </li>
  </ul>
  @endforeach
@endsection