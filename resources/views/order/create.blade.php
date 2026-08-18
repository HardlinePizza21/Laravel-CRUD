@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card form-card">
                    <div class="card-header form-card-header">
                        <h5>Create Order</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ route('order.save') }}">
                            @csrf
                            <label for="selectStatus" class="form-label">Select order status</label>
                            <select id="selectStatus" class="form-select mb-2" aria-label="Select order status" value="{{ old('total') }}"
                                name="status" >
                                <option value="traveling">Traveling</option>
                                <option value="canceled">Canceled</option>
                                <option value="waitingpayment">Waiting Payment</option>
                                <option value="arrive">Arrive</option>
                            </select>

                            <label for="totalInput" class="form-label">$ Total order price</label>
                            <div class="input-group">
                                <!-- Currency Symbol Prefix -->
                                <span class="input-group-text">$</span>

                                <!-- Price Input Field -->
                                <input type="number" class="form-control" id="totalInput" placeholder="0.0" step="0.1"
                                    min="0" aria-label="Amount" name="total">

                                <!-- Optional Suffix (e.g., Currency code or .00 hint) -->
                                <span class="input-group-text">USD</span>
                            </div>

                            <h6 for="total" class="form-label">Created at {{ $date }}</h6>

                            <input type="submit" class="btn btn-primary" value="Send" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
