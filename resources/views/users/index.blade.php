@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1>Users</h1>
    <p class="description">Browse the users registered in your POS directory.</p>

    <section class="card">
        <div class="card-header">
            User Directory · {{ $users->count() }} records
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Full Name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->full_name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection