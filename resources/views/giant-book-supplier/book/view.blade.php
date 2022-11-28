@extends('layouts.master')
@section('title', 'Book Detail')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-center my-4 w-100">
            <h1 class="fw-bold fs-3 mb-0">Book Detail</h1>
        </div>

        <div class="w-100 d-flex justify-content-center">
            <img src="{{ asset($book->image) }}" class="img-fluid " style="height: 500px" alt="">
        </div>

        <div class="my-4 d-flex justify-content-center">
            <div class="fs-5">Title:
                <span class="fs-5">{{ $book->title }}</span>
            </div>
        </div>

        <div class="mb-4 d-flex justify-content-center">
            <div class="fs-5">Author:
                <span class="fs-5">{{ $book->author }}</span>
            </div>
        </div>

        <div class="mb-4 d-flex justify-content-center">
            <div class="fs-5">Publisher:
                <span class="fs-5">{{ $book->publisher->name }}</span>
            </div>
        </div>

        <div class="mb-4 d-flex justify-content-center">
            <div class="fs-5">Year:
                <span class="fs-5">{{ $book->year }}</span>
            </div>
        </div>

        <div class="mb-4 px-5 text-center">
            <div class="fs-5">Synopsis: <br>
               <span class="fs-5">{{ $book->synopsis }}</span>
            </div>
        </div>
    </div>
@endsection
