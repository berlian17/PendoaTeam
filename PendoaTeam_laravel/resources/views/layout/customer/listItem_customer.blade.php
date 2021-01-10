@extends('layout/layout2')

@section('content')
    <h3 class="d-flex justify-content-center mt-5 mb-5">List of equipment</h3>
    <div class="container">

        @foreach ($items as $item)
        <div class="card mb-3">
            <div class="card-body">
                <form action="{{ route('cart') }}" method="post" class="form">
                    @csrf
                    <input type="text" class="form-control" id="inputId" name="id" value="{{ $item->id }}" hidden>
                    <div class="form-group">
                        <label for="name"><h3><strong>{{ $item->item_name }}</strong></h3></label>
                        <input type="text" class="form-control" id="inputName" name="name" value="{{ $item->item_name }}" hidden>
                    </div>
                    <div class="form-group">
                        <label for="specification"><strong>Specification:</strong></label><br>
                        <label for="specification">{{ $item->specification }}</label>
                        <input type="text" class="form-control" id="inputSpecification" name="specification" value="{{ $item->specification }}" hidden>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="availability"><strong>Availabile:</strong></label>
                            <label for="availability">{{ $item->availability }}</label>
                            <input type="number" class="form-control" id="inputAvailability" name="availability" value="{{ $item->availability }}" hidden>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="Price"><strong>Price per month:</strong> Rp</label>
                            <label for="price">{{ $item->price }}</label>
                            <input type="number" class="form-control" id="inputPrice" name="price" value="{{ $item->price }}" hidden>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="rent"><strong>Monthly rental time</strong></label>
                            <input type="number" class="form-control" id="inputRent" name="rent">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="amount"><strong>Amount</strong></label>
                            <input type="number" class="form-control" id="inputAmount" name="amount">
                        </div>
                        <div class="col-md-2 mt-4" align="center">
                            <button type="submit" class="btn btn-success col-md-5">Rent</button>
                        </div>                                
                    </div>
                </form>
            </div>
        </div>
        @endforeach
        
    </div>
@endsection