@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1 class="mb-4">Transaction Details</h1>
        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Item</th>
                    <th>Pay Amount</th>
                    <th>Sell Amount</th>
                    <th>Transaction Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $trans)
                <tr>
                    <td>{{ $trans->customer->name }}</td>
                    <td>{{ $trans->item }}</td>
                    <td>{{ $trans->pay_amount }}</td>
                    <td>{{ $trans->sell_amount }}</td>
                    <td>{{ $trans->transaction_date }}</td>
                    <td>
                        <a href="{{ route('transaction.edit', $trans->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('transaction.destroy', $trans->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this transaction?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Transaction">
                                Delete
                            </button>
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
