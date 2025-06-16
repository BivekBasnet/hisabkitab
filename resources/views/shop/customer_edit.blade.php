@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Customer</h1>
        <form action="{{ route('customer.update', $customer->id) }}" method="POST" class="custom-container">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
@endsection

@push('styles')
    <style>

    </style>

@endpush

@push('script')
    <script>

    </script>
@endpush
