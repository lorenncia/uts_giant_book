@extends('layouts.master')
@section('title', 'Publisher')

@section('content')
    <div class="container">
        <div class="bg-secondary p-3 text-white m-5 d-flex align-items-center justify-content-between">
            <div>
                <p class="fs-5">{{ $publisher->name }}</p>
                <p class="fs-5">Address - {{ $publisher->address }}</p>
                <p class="fs-5">Phone - {{ $publisher->phone }}</p>
                <p class="fs-5">Email - {{ $publisher->email }}</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center mb-4">
            @foreach ($books as $book)
                <div class="col-sm-3">
                    <div class="card" style="height: 700px">
                        <div class="w-100" style="height: 500px">
                            <img src="{{ asset($book->image) }}" class="img-fluid w-100 h-100" alt="">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">{{ $book->title }}</h2>
                            <p class="card-text">by {{ $book->publisher->name }}</p>
                        </div>

                        <div class="m-3">
                            <a href="{{ route('book.view', $book->id) }}" class="btn btn-primary px-4">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
