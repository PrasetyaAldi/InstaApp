@extends('layouts.auth.app')

@section('title', 'Registration | InstaApp')

@section('content')
<div class="login-page">

<div class="row text-center justify-content-center">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="#" style="font-family: billabong; font-style:italic">InstaApp</a>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Insert Name" autofocus="on" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Insert Username" autofocus="on" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('username') {{$message}} @enderror</span>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Insert Email" autofocus="on" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Insert Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    <div class="row mb-3">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Registration</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <div class="login mb-0">
                    Have an Account? <a href="{{ route('login') }}" title="Klik untuk ke halaman login">Log in</a>
                </div>
            </div>
    <!-- /.login-card-body -->
        </div>
    </div>
</div>
</div>

@endsection