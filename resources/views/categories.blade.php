

@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

    <div class="container">
        <div class="row">

            <div class="col">
                @foreach ($categories as $c)
                <a style="text-decoration: none; display: inline-block;" href="/posts?category={{ $c->slug }}">
                    <div class="card bg-dark text-white d-inline-flex">
                        <img src="https://source.unsplash.com/300x400?{{ $c->name }}"" class="card-img" alt="{{ $c->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-1" style="background-color: rgba(0,0, 0, 0.7)">{{ $c->name }}</h5>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection
