@extends('pages.teachers.teacher-content')

@section('content')
    @if (session('greeting'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('greeting') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2>Dashboard</h2>
@endsection
