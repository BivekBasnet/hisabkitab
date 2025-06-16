@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
    <div class="container">
        <h1 class="mb-4">Customer Details</h1>
            <table class="table table-bordered mb-4">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
