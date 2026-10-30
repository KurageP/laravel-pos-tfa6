@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h1>Customers</h1>
    <p class="description">Browse your customer directory and contact details.</p>

    <section class="card">
        <div class="card-header">
            Customer Directory · {{ $customers->count() }} records
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->full_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No customers found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection