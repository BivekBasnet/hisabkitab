@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <div class="container">
        <form action="{{ route('transaction.store') }}" method="POST" class="custom-container">
            @csrf
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer</label>
                <select class="form-select @error('customer_id') is-invalid @enderror" id="customer_id" name="customer_id" required>
                    <option value="">Select Customer</option>
                    @foreach($customer as $customer)
                        <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                    @endforeach
                </select>
                @error('customer_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pay_amount" class="form-label">Pay Amount</label>
                <input type="number" class="form-control @error('pay_amount') is-invalid @enderror" id="pay_amount" name="pay_amount" value="{{ old('pay_amount') }}">
                @error('pay_amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sell_amount" class="form-label">Sell Amount</label>
                <input type="number" class="form-control @error('sell_amount') is-invalid @enderror" id="sell_amount" name="sell_amount" value="{{ old('sell_amount') }}">
                @error('sell_amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="transaction_date" class="form-label">Transaction Date</label>
                <input type="date" class="form-control @error('transaction_date') is-invalid @enderror" id="transaction_date" name="transaction_date" value="{{ old('transaction_date') }}" required>
                @error('transaction_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Transaction</button>
        </form>
@endsection

@push('styles')
    <style>
        .container {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>

@endpush

@push('script')
    <script>
        console.log('Customer Create script loaded');
    </script>
@endpush
