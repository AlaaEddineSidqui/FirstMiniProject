@extends('pages.master')
@section('content')
    <header class="position-relative text-center text-white mb-5">
            <img src="{{ URL::asset('images/mb-a35.jpg') }}" class="w-100" alt="Banner">
            <div class="position-absolute top-50 start-50 translate-middle-x w-100 px-3">
                <h1 class="display-4">The New Mercedes A45S AMG</h1>
                <a href="/product" class="btn btn-light">
                    Buy Now!
                </a>
            </div>
        </header>
@endsection