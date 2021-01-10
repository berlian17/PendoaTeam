@extends('layout/layout3')

@section('content')
    <h3 class="d-flex justify-content-center mt-5 mb-5">List of equipment</h3>
    <div class="container">
        <table class="table">
            <thead class="thead bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Equipment Name</th>
                    <th>Specification</th>
                    <th>Availability</th>
                    <th>Price per month</th>
                    <th>Minimum Rent</th>
                </tr>
            </thead>
            <tbody>
                    @php
                        $i=0
                    @endphp
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->specification }}</td>
                        <td>{{ $item->availability }}</td>
                        <td>{{ $item->price }}</td>
                        <td> 1 month </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection