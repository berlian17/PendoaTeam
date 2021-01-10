@extends('layout/layout3')
@section('content')
    <h3 class="d-flex justify-content-center mt-5 mb-5">Transaction List</h3>
    <div class="container">
        <table class="table">
            <thead class="thead bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Transaction ID</th>
                    <th>Total Price</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($transactions == null)
                    <div class="alert alert-info" role="alert" align="center">
                        There is no data...
                    </div>
                @else
                    @php
                        $i=0
                    @endphp
                    @foreach ($transactions as $data)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->total_price }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td><a href="/employee/transaction/delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".modal">Detail</button>
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
                        <h5 class="modal-title" id="exampleModalLongTitle"><h3>Transaction detail</h3></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <p class="col-md-6">Transaction ID:</p>
                            <p class="col-md-6" align="right"></p>
                        </div>
                        <p>Customer ID:</p>
                        <table class="table">
                            <thead class="thead bg-primary text-white">
                                <tr>
                                    <th>Item ID</th>
                                    <th>Equipment Name</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Rental period</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($products as $item)
                                <tr>
                                    <td>Rp {{ $item->price }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->stock }}</td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection