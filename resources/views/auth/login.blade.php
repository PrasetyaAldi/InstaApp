@extends('layouts.auth.app')

@section('title', 'Login | InstaApp')

@section('content')
<div class="login-page">

<div class="row text-center justify-content-center">
    <div class="row">
        <div class="col">
            <div class="container">
                <img class="mt-5 shadow"style="border-radius:26%" src="{{ asset ('img/ig.png') }}" alt="profile Pic" height="400" width="400">                
            </div>
        </div>
        <div class="col">
            <div class="login-box" style="width: 500px">
                <!-- /.login-logo -->
                <div class="card shadow" style="height: 500px">
                    <div class="card-body login-card-body">
                        <div class="login-logo">
                            <a href="#" style="font-family: billabong; font-style:italic">InstaApp</a>
                        </div>
                        <p class="login-box-msg">
                            @if (session()->has('login.failed'))
                                <div class="alert alert-danger alert-dismissible text-left">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        {{ session('login.failed') }}
                                </div>
                            @endif
                        </p>
                        
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-group mb-4">
                                <input type="text" name="username" class="form-control" placeholder="Username" autofocus="on" autocomplete="off" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- /.col -->
                                <div class="col-12 mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <!-- /.social-auth-links -->
                        
                        <div class="login mt-4">
                            Don't have an account? <a href="{{ route('register') }}" title="Klik untuk registrasi">Sign Up</a>
                        </div>
                    </div>
            <!-- /.login-card-body -->
                </div>
            </div>
        </div>
        </div>
            
    </div>
</div>
</div>

@endsection