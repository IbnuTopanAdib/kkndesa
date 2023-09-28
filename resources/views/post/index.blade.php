@extends('layouts.master')

@section('container')
    <a href="/post/create" class="btn btn-primary mx-10"> Tambah</a>
    @if (session()->has('success'))
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    <table class="table table-striped table-hover datatable">
        <thead>
            <th>No</th>
            <th>Judul Berita</th>
            <th>Slug</th>
            <th>Excerpt</th>
            <th>Tanggal Pembuatan</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->slug }}</td>
                <td>{!! $post->excerpt !!}</td>
                
                <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                <td>
                    <div class="d-flex inline">
                        <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-info mx-1">Tampil</a>
                        <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-warning mx-1">Edit</a>
                        <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-1" onclick="return confirm('Apakah kamu yakin?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@endsection
