@extends('layouts/main')
@section('active1', 'active')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h2 class="text-center">{{ $post->judul }}</h2>
            <img src="{{ asset('storage/' . $post->poster) }}" class="card-img-top" alt="{{ $post->judul }}"
                class="img-fluid">
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="d-block mt-3">back to post</a>
        </div>
    </div>
@endsection
