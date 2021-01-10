@extends('layout\layout3')
@section('content')
    <div class="container mt-5 mb-5 p-4">
        <div class="card p-3 shadow">
            <h2><b>Add Employee</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <form action="{{ route('addEmployee') }}" method="post" class="form" enctype="multipart/form-data">
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
                    </div>   
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control @error('fullname') is-invalid border-danger @enderror" id="inputFullname" name="fullname">
                            @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid border-danger @enderror" id="inputUsername" name="username">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control @error('nip') is-invalid border-danger @enderror" id="inputNIP" name="nip">
                            @error('nip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid border-danger @enderror" id="inputEmail" name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control @error('password') is-invalid border-danger @enderror" id="inputPassword" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid border-danger @enderror" id="inputPhone" name="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control @error('address') is-invalid border-danger @enderror" name="address" id="inputAddress" cols="30" rows="5" placeholder="Current Address"></textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select class="form-control @error('department') is-invalid border-danger @enderror" id="inputDepartment" name="department">
                                <option value="Operational">Operational</option>
                                <option value="Technical">Technical</option>
                            </select>
                            @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control @error('role') is-invalid border-danger @enderror" id="inputRole" name="role">
                                <option value="admin">Admin</option>
                                <option value="employee">Employee</option>
                            </select>
                        </div>
                        <hr class="hr2">
                        <div align="center">
                            <button type="submit" class="btn btn-success col-md-5">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>     
    </div>
@endsection