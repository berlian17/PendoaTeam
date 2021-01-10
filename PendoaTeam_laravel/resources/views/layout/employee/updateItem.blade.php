@extends('layout\layout3')
@section('content')
    <div class="container mt-5 mb-5 p-4">
        <div class="card p-3 shadow">
            <h2><b>Add Item</b></h2>
            <hr class="hr1">

            <!-- Form -->
            <form action="{{ route('updateItem.employee') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="text" class="form-control" name="id" value="{{ $items->id }}" hidden>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Equipment name</label>
                            <input type="text" class="form-control @error('name') is-invalid border-danger @enderror" id="inputName" name="name" value="{{ $items->item_name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control @error('type') is-invalid border-danger @enderror" id="inputType" name="type" value="{{ $items->type }}">
                                <option value="Forklift">Forklift</option>
                                <option value="Concrete pump">Concrete pump</option>
                                <option value="Tower crane">Tower crane</option>
                                <option value="Generating set">Generating set</option>
                                <option value="Boom lift">Boom lift</option>
                                <option value="Passenger hoist">Passenger hoist</option>
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="specification">Specification</label>
                            <textarea class="form-control @error('specification') is-invalid border-danger @enderror" id="inputSpecification" name="specification" cols="30" rows="5" placeholder="Specification"> {{ $items->specification }} </textarea>
                            @error('specification')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="availability">Availability</label>
                            <input type="number" min="0" class="form-control @error('availability') is-invalid border-danger @enderror" id="inputAvailability" name="availability" value="{{ $items->availability }}">
                            @error('availability')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid border-danger @enderror" id="inputPrice" name="price" value="{{ $items->price }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> 
                </div>
                <hr class="hr2">
                <div align="center">
                    <button type="submit" class="btn btn-success col-md-5">Save</button>
                </div>
            </form>
        </div>     
    </div>
@endsection