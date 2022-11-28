@extends('layouts.master')
@section('title', 'Category')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center my-4 w-100">
            <h1 class="fw-bold fs-3 mb-0">{{ $category->name }}</h1>
        </div>

        <div class="row d-flex justify-content-center mb-4">
            @foreach ($bookCategories as $bookCategory)
                <div class="col-sm-3">
                    <div class="card" style="height: 700px">
                        <div class="w-100" style="height: 500px">
                            <img src="{{ asset($bookCategory->book->image) }}" class="img-fluid w-100 h-100" alt="">
                        </div>

                        <div class="card-body">
                            <h2 class="card-title">{{ $bookCategory->book->title }}</h2>
                            <p class="card-text">by {{ $bookCategory->book->publisher->name }}</p>
                        </div>

                        <div class="m-3">
                            <a href="{{ route('book.view', $bookCategory->book->id) }}" class="btn btn-primary px-4">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $bookCategories->links() }}
    </div>
@endsection
