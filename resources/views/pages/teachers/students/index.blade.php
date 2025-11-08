@extends('pages.teachers.teacher-content')

@section('content')

<!-- Flash messages using Bootstrap alerts -->
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('warning') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Slotted content -->
<h2>Class Students</h2>
<table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = ($students->currentPage() - 1) * $students->perPage() + 1;
        @endphp

        @foreach ($students as $student)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
            <td>
                <a href="/teacher/students/{{ $student->id }}" class="btn btn-primary btn-sm">View</a>
                <a href="/teacher/students/{{ $student->id }}/assign" class="btn btn-info btn-sm">Assign</a>
                <a href="/teacher/students/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @php $i++; @endphp
        @endforeach
    </tbody>
</table>

<div class="container">
    {{ $students->links() }}
</div>

@endsection
