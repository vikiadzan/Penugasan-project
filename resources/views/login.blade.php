@extends('layouts.main')
@section('container')
@section('title','Form Login')


    <div class="row justify-content-center">
        <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            @if (session()->has('errorlogin'))
                <div class="alert alert-danger" role="alert">
                    {{session('errorlogin') }}
                </div>
            @endif

        <form method="post" action="/login">
        @csrf
        <<img class="mb-4 " src="../img/sayur1.jpg" alt="" width="72" height="57">
    
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput" required autofocus>Email address</label>
            </div>
                <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" required>Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2022</p>
        </form>
     </main>

        </div>
    </div>
  

@endsection

