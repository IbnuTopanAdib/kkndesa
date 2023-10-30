@extends('layouts.master')

@section('container')
    <div class="container mt-5">
        <div class="row">
            @forelse ($contacts as $item)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <strong>From:</strong> {{ $item->name }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->subject }}</h5>
                            <p class="card-text">{{ $item->body }}</p>
                        </div>
                        <div class="card-footer">
                            <strong>Email:</strong> {{ $item->email }}
                        </div>
                    </div>
                </div>
            @empty
                <div style="height: 70vh">
                    <p class="text-center fs-4">No Contact Found</p>
                </div>
            @endforelse



        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $contacts->links() }}
    </div>
@endsection
