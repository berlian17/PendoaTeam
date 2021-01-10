@extends('layout\layout2')
@section('content')
    <div class="container mt-5 mb-5 p-4">
        <h2><b>Form Update</b></h2>
        <hr class="hr1">

        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <form action="#" method="post" class="form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="equipment">Equipment Name</label>
                            <input type="text" class="form-control" id="inputEquipment" name="equipment" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="inputType" name="type" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="amount">Rent Amount</label>
                            <input type="number" min="0" class="form-control" id="inputAmount" name="amount" required>
                            <div class="invalid-feedback">
                                Rent Amount is required.
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="amount">Rental Period</label>
                            <input type="number" min="0" class="form-control" id="inputAmount" name="amount" required>
                            <small id="hint" class="form-text text-muted">Duration in month</small>
                            <div class="invalid-feedback">
                                Rent Amount is required.
                            </div>
                        </div>
                    </div>
                    <hr class="hr2">
                    <div align="center">
                        <button type="button" class="btn btn-success col-md-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>         
@endsection