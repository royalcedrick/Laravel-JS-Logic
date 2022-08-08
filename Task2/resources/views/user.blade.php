@extends('layout.app')
@section('body')
    <table id="eUserTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Company Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['phone'] }}</td>
                    <td>{{ $user['company']['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
