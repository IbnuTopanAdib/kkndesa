@extends('layouts/main')
@section('active1', 'active')
@section('content')
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...." name="search"
                        value="{{ request('search') }}">
                    <button type="submit" class="btn btn-get-started">Saerch</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="{{ asset('storage/' . $posts[0]->poster) }}" class="card-img-top"
                alt="{{ $posts[0]->judul }}">
            <div class="card-body text-center">
                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h5 class="card-title">{{ $posts[0]->judul }}</h5>
                </a>
                <p>
                    <small class="text-muted">
                        {{ $posts[0]->judul }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/blog/{{ $posts[0]->slug }}" class=" text-decoration-none btn btn-success">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $post->poster) }}" class="card-img-top"
                                alt="{{ $post->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->judul }}</h5>
                                <p>
                                    <small class="text-muted">
                                        {{ $post->judul }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="mt-5">
        {{ $posts->links() }}
    </div>





@endsection
