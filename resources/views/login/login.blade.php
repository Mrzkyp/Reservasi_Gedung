@extends('layouts.master-member')
@section('title','login')
@section('content')

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <center>
            <h2>Login</h2>
        <form action="{{route('login-proses')}}" method="post">
            @csrf 
            <br>
            <div class="form-outline mb-2">
                <label class="form-label" for="email">Email</label>
                <input name="email" type="text" id="email" class="form-control" placeholder="@gmail.com">
            </div>
            <div class="form-outline mb-2">
                <label class="form-label" for="form2Example2">Password</label>
                <input name="password" type="password" id="form2Example2" class="form-control" placeholder="password">
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-1">Login</button>

            <div class="text-center">
                <a href="#">Forgot Password?</a><p>Not a Member? <a href="register">Register</a></p>
            </div>
            <br>
        </form>
        </center>
    </div>
    <div class="col-4"></div>
</div>

@endsection