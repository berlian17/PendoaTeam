@extends('layout\layout2')
@section('content')
    <div class="container mt-5 mb-5 p-4">
        <div class="card p-3 shadow">
            <h2><b>Your Profile</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <form action="#" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4">
                <!-- Card -->
                    <div class="col-md-4">
                        <div class="card" align="center">
                            <img src="{{ asset('image/profile.png') }}" alt="img" class="img-fluid">
                        </div>
                        <input type="text" class="form-control" name="id" value="{{ $customers->id }}" hidden>
                    </div>   
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="inputFullname" name="fullname" value="{{ $customers->fullname }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username" value="{{ $customers->username }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $customers->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="inputPhone" name="phone" value="{{ $customers->phone }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="5" placeholder="Current Address" disabled> {{ $customers->address }} </textarea>
                        </div>            
                        <hr class="hr2">
                        <div align="center">
                            <a href="/customer/profile/updateProfile/{{ $customers->id }}" class="btn btn-success col-md-5">Update</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>     
    </div>
@endsection