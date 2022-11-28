@extends('layouts.master')
@section('title', 'Publisher')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center my-4 w-100">
            <h1 class="fw-bold fs-3 mb-0">Publisher List</h1>
        </div>

        <div class="row d-flex justify-content-center mb-4">
            @foreach ($publishers as $publisher)
                <div class="col-sm-3">
                    <div class="card" style="height: 500px">
                        <div class="w-100" style="height: 300px">
                            <img src="{{ asset($publisher->image) }}" class="img-fluid w-100 h-100" alt="">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">{{ $publisher->name }}</h2>
                            <p class="card-text">{{ $publisher->address }}</p>
                        </div>

                        <div class="m-3">
                            <a href="{{ route('publisher.view-detail', $publisher->id) }}" class="btn btn-primary px-4">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $publishers->links() }}
    </div>
@endsection
