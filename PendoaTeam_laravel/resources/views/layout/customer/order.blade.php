@extends('layout\layout2')
@section('content')
    <div class="container mt-5 mb-5 p-4">
        <div class="card p-3 shadow">
            <h2><b>Rental Form</b></h2>
            <p>Please fill in our Rental Application Form in order to express your interest in renting a property.</p>
            <hr class="hr1">

            <!-- Form -->
            <div class="row mt-4">
                <div class="col-md-8">
                    <form action="#" method="post" class="form needs-validation" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                            <div class="invalid-feedback">
                                Email is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="inputPhone" name="phone" required>
                            <div class="invalid-feedback">
                                Phone number is required.
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="10" placeholder="Current Address" required></textarea>
                                <div class="invalid-feedback">
                                    Address is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip Code" required>
                                <div class="invalid-feedback">
                                    Zip code is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="totalPrice">Total Price</label>
                            <input type="text" class="form-control" id="TP" name="totalPrice" disabled>
                        </div>
                        <hr class="hr2">
                        <div class="form-group">
                            <h3><b>Payment</b></h3>
                        </div>
                        <div class="form-group">
                            <label for="nameCard">Name on card</label>
                            <input type="text" class="form-control" id="inputNameCard" name="nameCard" required>
                            <small id="hint" class="form-text text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required.
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="numberCard">Debit card number</label>
                                <input type="number" min="0" class="form-control" id="inputNumberCard" name="numberCard" required>
                                <div class="invalid-feedback">
                                    Credit card number is required.
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Expiration">Expiration</label>
                                <input type="date" class="form-control" id="inputExpiration" name="expiration" required>
                                <div class="invalid-feedback">
                                    Expiration is required.
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="securityCode">Security Code</label>
                                <input type="password" class="form-control" id="inputSecurityCode" name="securityCode" required>
                                <div class="invalid-feedback">
                                    Security code is required.
                                </div>
                            </div>
                        </div>
                        <hr class="hr2">
                        <div align="center">
                            <button type="button" class="btn btn-success col-md-5">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="table-active text-center" colspan="3">List of Rentals</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
@endsection