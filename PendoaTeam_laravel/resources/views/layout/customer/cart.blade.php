@extends('layout/layout2')
@section('content')
    <h3 class="d-flex justify-content-center mt-5 mb-5">Heavy Equipment Rental List</h3>
    <div class="container">
        <form action="{{ route('transaction') }}" method="post" class="form">
            @csrf
        <table class="table">
            <thead class="thead bg-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Equipment Name</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Period</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (session('cart'))
                    <?php 
                        $i=0;
                        $grandtotal = 0;
                    ?>
                    @foreach (session('cart') as $id => $details)
                        <?php 
                            $total = $details['price'] * $details['quantity'];
                        ?>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['type'] }}</td>
                        <td>{{ $details['amount'] }}</td>
                        <td>{{ $details['rent'] }} month</td>
                        <td>Rp {{ $details['price'] }}</td>
                        <td><a href="/customer/cart/delete/{{ $details['id'] }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php 
                        $grandtotal += $total;
                    ?>
                    @endforeach
                    <tr>
                        <td colspan="5" align="center"><b>Total</b></td>
                        <td>Rp <?= $grandtotal ?></td>
                        <td><button type="submit" class="btn btn-success col-md-6">Submit</button></td>
                    </tr>
            </tbody>
        </table>
        <input type="number" class="form-control" id="inputGrandTotal" name="grandTotal" value="{{ $grandtotal }}" hidden>
        @endif    
    </form>
    </div>
@endsection