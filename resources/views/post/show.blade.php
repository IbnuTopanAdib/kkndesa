@extends('layouts.master')
@section('judul', 'Detail Postingan Magang')
@section('active1', 'active')
@section('container')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex inline">
                <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-info mx-1">Tampil</a>
                <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-warning mx-1">Edit</a>
                <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mx-1" onclick="return confirm('Apakah kamu yakin?')">Hapus</button>
                </form>
            </div>
            <h2 class="text-center">{{ $post->judul }}</h2>
            <img src="{{ asset('storage/' . $post->poster) }}" class="card-img-top" alt="{{ $post->judul }}"
                class="img-fluid">
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a href="/post" class="d-block mt-3">back to post</a>

        </div>
    </div>





@endsection
