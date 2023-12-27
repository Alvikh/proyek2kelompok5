@extends('layouts.admin.admin')

@section('main-content')
    <h1>Data User</h1>

    <style>
        .custom-btn-color {
            background-color: #5AB7F4; 
            color: #fff; 
        }
        /* Custom Table Styles */
        .table-custom {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        .table-custom th, .table-custom td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            color: #000; /* Black text color added */
        }

        .table-custom th {
            background-color: #5AB7F4;
            border: 1px solid #fff; /* Black border added */
            color: #fff; /* Text color */
        }
        .table-custom tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table-custom tbody tr:hover {
            background-color: #e6f7ff;
        }

        .btn-custom {
            margin-right: 5px;
        }
    </style>

    <table class="table table-custom">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
