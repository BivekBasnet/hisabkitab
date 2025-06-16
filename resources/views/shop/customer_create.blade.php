@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <form action="{{ route('customer.store') }}" method="POST" class="custom-container">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Customer</button>
    </form>
@endsection

@push('styles')
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
        }
        .custom-container {
            padding: 32px 40px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            display: flex;
            flex-direction: column;
            max-width: 480px;
            margin: 48px auto;
            width: 100%;
            align-items: stretch;
            min-height: 60vh;
            border: 1px solid #e3e6f0;
        }
        .custom-container .form-label {
            font-weight: 600;
            color: #495057;
        }
        .custom-container .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            transition: border-color 0.2s;
        }
        .custom-container .form-control:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 0 2px rgba(108, 99, 255, 0.15);
        }
        .custom-container .btn-primary {
            background: linear-gradient(90deg, #6c63ff 0%, #48c6ef 100%);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 10px 0;
            margin-top: 12px;
            transition: background 0.2s;
        }
        .custom-container .btn-primary:hover {
            background: linear-gradient(90deg, #48c6ef 0%, #6c63ff 100%);
        }
        .invalid-feedback {
            font-size: 0.95em;
        }
    </style>

@endpush

@push('script')
    <script>
        console.log('Customer Create page script loaded');
    </script>
@endpush
