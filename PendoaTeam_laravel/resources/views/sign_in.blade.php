@extends('layout/layout1')
@section('content')
    <!-- Card -->
    <div class="card card-index position-fixed m-5 col-md-4 shadow-lg">
        <div class="card-body">
            <h2><b>Sign In</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <form action="{{ route('signIn')}}" method="post" class="form">
                        @csrf
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid border-danger @enderror" id="inputEmail" name="email" value="{{old('email')}}" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid border-danger @enderror" id="inputPassword" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <hr class="hr2">
                        <div>
                            <input type="submit" name="signin" value="Sign In" class="btn btn-primary col-md mb-2">
                        </div>
                        <div class="row col-sm-12">
                            <div class="form-check form-check-inline col-sm-5">
                                <input class="form-check-input" type="checkbox" id="Checkbox" name="remember">
                                <label class="form-check-label" for="Checkbox">Remember me</label>
                            </div>
                            <div class="col-sm-5 ml-5" align="right">
                                <a href="#"><h6>Forgot password?</h6></a>
                            </div>
                        </div>
                        <div>
                            <p class="text-center mt-2">Don't have an account yet? <a href="{{ route('signUp.index') }}">Sign Up</a> now!</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection