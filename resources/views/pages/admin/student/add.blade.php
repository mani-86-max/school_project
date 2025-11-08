@extends('pages.admin.admin-content')

@section('content')

<div class="d-flex mb-3">
    <div class="p-2">
        <h2>Add Student</h2>
    </div>
    <div class="ms-auto p-2">
        <form action="/admin/students/upload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".xls,.xlsx" class="form-control mb-2">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-upload"></i> Bulk Upload</button>
            <x-form-error name="file"/>
        </form>
    </div>
</div>

<form action="/admin/students" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf

    <!-- Student Info -->
    <h5>Student Info</h5>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="std_first_name" value="{{ old('std_first_name') }}" required>
            <x-form-error name="std_first_name"/>
        </div>
        <div class="col-md-6 mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="std_last_name" value="{{ old('std_last_name') }}" required>
            <x-form-error name="std_last_name"/>
        </div>
        <div class="col-md-2 mb-3">
            <label for="indexNo" class="form-label">Index No.</label>
            <input type="text" class="form-control" id="indexNo" name="indexNo" value="{{ old('indexNo') }}" required>
            <x-form-error name="indexNo"/>
        </div>
        <div class="col-md-2 mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select" required>
                <option value="">-- Choose One --</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            <x-form-error name="gender"/>
        </div>
        <div class="col-md-4 mb-3">
            <label for="nic" class="form-label">NIC</label>
            <input type="text" class="form-control" id="nic" name="std_nic" value="{{ old('std_nic') }}">
            <x-form-error name="std_nic"/>
        </div>
        <div class="col-md-4 mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}" required>
            <x-form-error name="dob"/>
        </div>
        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            <x-form-error name="email"/>
        </div>
        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <x-form-error name="password"/>
        </div>
    </div>

    <hr>

    <!-- Guardian Info -->
    <h5>Guardian Info</h5>
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="initials" class="form-label">Initials</label>
            <input type="text" class="form-control" id="initials" name="initials" value="{{ old('initials') }}">
            <x-form-error name="initials"/>
        </div>
        <div class="col-md-4 mb-3">
            <label for="g_fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="g_fname" name="g_first_name" value="{{ old('g_first_name') }}">
            <x-form-error name="g_first_name"/>
        </div>
        <div class="col-md-4 mb-3">
            <label for="g_lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="g_lname" name="g_last_name" value="{{ old('g_last_name') }}">
            <x-form-error name="g_last_name"/>
        </div>
        <div class="col-md-6 mb-3">
            <label for="g_nic" class="form-label">NIC</label>
            <input type="text" class="form-control" id="g_nic" name="g_nic" value="{{ old('g_nic') }}">
            <x-form-error name="g_nic"/>
        </div>
        <div class="col-md-6 mb-3">
            <label for="g_phone" class="form-label">Phone No</label>
            <input type="text" class="form-control" id="g_phone" name="g_phone" value="{{ old('g_phone') }}">
            <x-form-error name="g_phone"/>
        </div>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Add Student</button>
        <button type="reset" class="btn btn-secondary">Clear</button>
    </div>
</form>

@endsection
