@extends('layout\layout3')
@section('content')
    <div class="container mt-5 mb-5 p-4">
        <div class="card p-3 shadow">
            <h2><b>Your Profile</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <form action="{{ route('profile.update.employee') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4">
                <!-- Card -->
                    <div class="col-md-4">
                        <div class="card" align="center">
                            <img src="{{ asset('image/profile.png') }}" alt="img" class="img-fluid">
                            <div class="form-group mt-3 mx-auto">
                                <label for="image">Image file input</label>
                                <input type="file" class="form-control-file" name="image" id="inputImage">
                            </div>
                        </div>
                        <input type="text" class="form-control" name="id" value="{{ $employees->id }}" hidden>
                    </div>   
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="inputFullname" name="fullname" value="{{ $employees->fullname }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid border-danger @enderror" id="inputUsername" name="username" value="{{ $employees->username }}">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="inputNIP" name="nip" value="{{ $employees->nip }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $employees->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid border-danger @enderror" id="inputPhone" name="phone" value="{{ $employees->phone }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <textarea class="form-control @error('address') is-invalid border-danger @enderror" name="address" id="inputAddress" cols="30" rows="5" placeholder="Current Address"> {{ $employees->address }} </textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="department">Department</label>
                                <select class="form-control" id="inputDepartment" name="department" value="{{ $employees->department }}" disabled>
                                    <option value="Operational">Operational</option>
                                    <option value="Technical">Technical</option>
                                </select>
                            </div>
                        </div>
                        <hr class="hr2">
                        <div align="center">
                            <button type="submit" class="btn btn-success col-md-5">save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>     
    </div>
@endsection