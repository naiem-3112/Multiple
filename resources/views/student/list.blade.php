@extends('layouts/app')
@section('content')
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>From</th>
            <th>To</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->from }}</td>
            <td>{{ $student->to }}</td>
            <td>
                <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                <a href="{{ route('student.delete', $student->id) }}">Delete</a>
            </td>
        </tr>
            @endforeach
    </table>
    <a href="{{ route('student.createForm') }}">Create New Student</a>
    @endsection
