@extends('layouts.admin') {{-- Uses your admin layout --}}

@section('content')
<div class="container-fluid mt-4">

    {{-- Greeting alert --}}
    @if (session('greeting'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('greeting') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2 class="mb-4">Dashboard</h2>

    <div class="row g-3">

        {{-- Students Count --}}
        <div class="col-md-3">
            <div class="card border-primary shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title display-6">{{ $counts->students_count }}</h5>
                    <p class="card-text">Students</p>
                </div>
            </div>
        </div>

        {{-- Teachers Count --}}
        <div class="col-md-3">
            <div class="card border-success shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title display-6">{{ $counts->teachers_count }}</h5>
                    <p class="card-text">Teachers</p>
                </div>
            </div>
        </div>

        {{-- Subjects Count --}}
        <div class="col-md-3">
            <div class="card border-warning shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title display-6">{{ $counts->subjects_count }}</h5>
                    <p class="card-text">Subjects</p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
