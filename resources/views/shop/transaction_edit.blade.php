@extends('layouts.app')

@section('title', 'Transaction Edit')

@section('content')
    <div class="container">
        <h1 class="mb-4">Transaction Edit</h1>
        <form action="{{ route('transaction.update', $transaction->id) }}" method="POST" class="custom-container">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer</label>
                <select class="form-select @error('customer_id') is-invalid @enderror" id="customer_id" name="customer_id" required>
                    <option value="">Select Customer</option>
                    @foreach($customer as $cust)
                        <option value="{{ $cust->id }}" {{ old('customer_id', $transaction->customer_id) == $cust->id ? 'selected' : '' }}>{{ $cust->name }}</option>
                    @endforeach
                </select>
                @error('customer_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="item" class="form-label">item</label>
                <input type="text" class="form-control @error('item') is-invalid @enderror" id="item" name="item" value="{{ old('item', $transaction->item) }}" required>
                @error('item')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pay_amount" class="form-label">pay_amount</label>
                <input type="text" class="form-control @error('pay_amount') is-invalid @enderror" id="pay_amount" name="pay_amount" value="{{ old('pay_amount', $transaction->pay_amount) }}">
                @error('pay_amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sell_amount" class="form-label">sell_amount</label>
                <input type="text" class="form-control @error('sell_amount') is-invalid @enderror" id="sell_amount" name="sell_amount" value="{{ old('sell_amount', $transaction->sell_amount) }}">
                @error('sell_amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="transaction_date" class="form-label">transaction_date</label>
                <input type="date" class="form-control @error('transaction_date') is-invalid @enderror" id="transaction_date" name="transaction_date" value="{{ old('transaction_date', $transaction->transaction_date ? \Illuminate\Support\Carbon::parse($transaction->transaction_date)->format('Y-m-d') : null) }}">
                @error('transaction_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Transaction Customer</button>
        </form>


    </div>
@endsection

@push('styles')
    <style>

    </style>

@endpush

@push('script')
    <script>

    </script>
@endpush
