@extends('layout/layout3')
@section('content')
    @if (Session::get('role') == 'admin')
    <h3 class="d-flex justify-content-center mt-5 mb-5">List of User</h3>
    <div class="container">
        <div class="row">
            <a href="{{ route('addUser.index.employee') }}" class="btn btn-success mb-2 ml-3 col-md-2">Add Customer</a>
            <a href="{{ route('addEmployee.index.admin') }}" class="btn btn-success mb-2 ml-2 col-md-2">Add Employee</a>
        </div>
        <div class="row">
            <table class="table col-md-5">
                <thead class="thead bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Customer ID</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data == null)
                        <div class="alert alert-info" role="alert" align="center">
                            There is no data...
                        </div>
                    @else
                        @php
                            $i=0
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td align="center">{{ $item->id }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="/employee/user/delete/{{ $item->id }}" class="btn btn-danger col-md-12 mb-1">Delete</a>
                                <button type="button" class="btn btn-success col-md-12" data-toggle="modal" data-target=".modal">Detail</button></td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <table class="table col-md-6 ml-1">
                <thead class="thead bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Employee ID</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data1 == null)
                        <div class="alert alert-info" role="alert" align="center">
                            There is no data...
                        </div>
                    @else
                        @php
                            $i=0
                        @endphp
                        @foreach ($data1 as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td align="center">{{ $item->id }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role }}</td>
                            <td><a href="/admin/user/delete/{{ $item->id }}" class="btn btn-danger col-md-6 mb-1">Delete</a>
                                <button type="button" class="btn btn-success col-md-6" data-toggle="modal" data-target=".modal">Detail</button></td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><h3>Customer detail</h3></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" class="form">
                            @csrf
                            <p>Customer ID:</p>
                            <div class="row mt-4">
                            <!-- Card -->  
                                <div class="col-md-4">
                                    <div class="card" align="center">
                                        <img src="{{ asset('image/profile.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div> 
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="fullname">Fullname</label>
                                        <input type="text" class="form-control" id="inputFullname" name="fullname" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="username" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="inputPhone" name="phone" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="5" placeholder="Current Address" disabled></textarea>
                                    </div>            
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif (Session::get('role') == 'employee')
    <h3 class="d-flex justify-content-center mt-5 mb-5">Customer List</h3>
    <div class="container">
        <a href="{{ route('addUser.index.employee') }}" class="btn btn-success mb-2">Add Customer</a>
        <table class="table">
            <thead class="thead bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Customer ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($data == null)
                    <div class="alert alert-info" role="alert" align="center">
                        There is no data...
                    </div>
                @else
                    @php
                        $i=0
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td><a href="/employee/user/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".modal">Detail</button></td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><h3>Customer detail</h3></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" class="form">
                            @csrf
                            <p>Customer ID:</p>
                            <div class="row mt-4">
                            <!-- Card -->  
                                <div class="col-md-4">
                                    <div class="card" align="center">
                                        <img src="{{ asset('image/profile.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div> 
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="fullname">Fullname</label>
                                        <input type="text" class="form-control" id="inputFullname" name="fullname" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="username" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="inputPhone" name="phone" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="5" placeholder="Current Address" disabled></textarea>
                                    </div>            
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection