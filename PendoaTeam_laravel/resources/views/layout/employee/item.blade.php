@extends('layout/layout3')
@section('content')
    <h3 class="d-flex justify-content-center mt-5 mb-5">List of Equipments</h3>
    <div class="container">
        <a href="{{ route('addItem.index.employee') }}" class="btn btn-success mb-2">Add equipment</a>
        <table class="table">
            <thead class="thead bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Equipment Name</th>
                    <th>Type</th>
                    <th>Availability</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($items == null)
                    <div class="alert alert-info" role="alert" align="center">
                        There is no data...
                    </div>
                @else
                    @php
                        $i=0
                    @endphp
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->availability }}</td>
                        <td>Rp {{ $item->price }}</td>
                        <td><a href="/item/update/{{ $item->id }}" class="btn btn-primary">Edit</a>
                            <a href="/item/delete/{{ $item->id }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection