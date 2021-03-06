@extends('layouts.main')


@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        @if (session('success')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{  session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session('loginError')) 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{  session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        


        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
            
                <div class="form-floating">
                    <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
        </main>    
    </div>
</div>
@endsection