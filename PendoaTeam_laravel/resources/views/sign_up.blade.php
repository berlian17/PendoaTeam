@extends('layout/layout1')
@section('content')
    <!-- Card -->
    <div class="card card-index position-fixed ml-5 col-md-4">
        <div class="card-body">
            <h2><b>Sign Up</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <form action="{{ route('signUp') }}" method="post" class="form">
                        @csrf
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('failed'))
                            <div class="alert alert-danger">
                                {{ Session::get('failed') }}
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
                        <div class="form-group">
                            <label for="confirmation">Password Confirmation</label>
                            <input type="password" class="form-control @error('password') is-invalid border-danger @enderror" id="inputconfirmation" name="confirmation" placeholder="Password confirmation">
                            @error('confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <hr class="hr2">
                        <div>
                            <input type="submit" name="signup" value="Sign Up" class="btn btn-primary col-md mb-2">
                        </div>
                        <div class="form-group mt-2" align="center"><h6>Already have an account?</h6></div>
                        <div class="form-group" align="center"><a href="{{ route('signIn.index')}}" role="button"><h6>Sign In</h6></a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection