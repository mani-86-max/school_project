@extends('pages.admin.admin-content')

@section('content')
<h2>Assign Students to {{ $class->name }} - {{ $class->year }} Class</h2>

<form action="/admin/class/{{ $class->id }}/assign" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf

    <!-- Class Name -->
    <div class="mb-3">
        <label for="class_name" class="form-label">Class</label>
        <input type="text" id="class_name" name="class_name" class="form-control" value="{{ $class->name }}" readonly>
        <x-form-error name="class_name" />
    </div>

    <!-- Class ID -->
    <input type="hidden" name="class_id" value="{{ $class->id }}">

    <!-- Students Checkboxes -->
    <div class="mb-3">
        <label for="students" class="form-label">Students</label>
        <div class="row mt-2">
            @foreach($students as $student)
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="students[]" value="{{ $student->id }}" id="student{{ $student->id }}">
                    <label class="form-check-label" for="student{{ $student->id }}">
                        {{ $student->first_name }} {{ $student->last_name }}
                    </label>
                </div>
                <x-form-error name="students" />
            </div>
            @endforeach
        </div>
    </div>

    <!-- Submit Buttons -->
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Assign</button>
        <button type="reset" class="btn btn-outline-secondary">Clear</button>
    </div>
</form>
@endsection
