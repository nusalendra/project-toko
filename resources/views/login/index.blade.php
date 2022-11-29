@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-4">
        
        <!-- Flash Message (Alert Bootstrap), untuk kata success diambil dari RegisterController-->
        @if(session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal d-block text-center">Please Login</h1>
        <form action="/login" method="POST">            
            @csrf
        
            <div class="form-floating">
            <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email address</label>
            </div>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            </div>                    
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>            

        </form>

        <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>

        </main>
    </div>
</div>
@endsection