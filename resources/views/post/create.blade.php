@extends('layouts.master')
@section('container')
    <div class="row justify-content-center">


        <div class="col-md-8">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" mb-3">
                    <label for="judul">Judul Post</label>
                    <input type="text" name="judul" id="judul" placeholder="Masukkan Judul Berita"
                        class="form-control" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}">
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="excerpt">Kutipan</label>
                    <input id="excerpt" value="{{ old('excerpt') }}" type="hidden" name="excerpt">
                    <trix-editor input="excerpt"></trix-editor>
                    @error('excerpt')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label for="body">Isi Berita</label>
                    <input id="body" value="{{ old('body') }}" type="hidden" name="body">
                    <trix-editor input="body"></trix-editor>
                    @error('body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="poster" class="form-label">Poster</label>
                    <input type="file" name="poster" id="poster" class="form-control">
                    @error('poster')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

@endsection
