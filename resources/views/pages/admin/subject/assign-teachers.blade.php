@extends('pages.admin.admin-content')

@section('content')

<h2>Assign Subjects to Teachers</h2>

<form action="/admin/subjects/assign" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    <h3>Teacher Details</h3>
    <div class="mb-3">
        <label for="teachers" class="form-label">Teacher</label>
        <select name="teacher" id="teachers" class="form-select">
            <option value="">-- Choose One --</option>
            @foreach ($teachers as $teacher)
                <option value="{{$teacher->id}}">
                    {{$teacher->salutation}} {{$teacher->first_name}} {{$teacher->last_name}}
                </option>
            @endforeach
        </select>
        <x-form-error name="teacher"/>
    </div>

    <div class="mb-3">
        <label for="subjects" class="form-label">Subjects</label>
        <div class="row">
            @foreach ($subjects as $subject)
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{$subject->id}}" name="subjects[]" id="{{$subject->code}}">
                        <label class="form-check-label" for="{{$subject->code}}">
                            {{$subject->name}}
                        </label>
                    </div>
                    <x-form-error name="subjects"/>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Assign</button>
        <button type="reset" class="btn btn-outline-secondary">Clear</button>
    </div>
</form>

@endsection
