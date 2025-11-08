@extends('pages.admin.admin-content')

@section('content')
<h2>{{ $student->first_name }}'s Profile</h2>

<div class="container py-5">
    <div class="row">
        <!-- Student Info Card -->
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                         alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-2">{{ $student->first_name }} {{ $student->last_name }}</h5>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="/admin/students/{{ $student->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/students/{{ $student->id }}" method="POST" class="ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Details -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">Full Name</div>
                        <div class="col-sm-9 text-muted">{{ $student->first_name }} {{ $student->last_name }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">Gender</div>
                        <div class="col-sm-9 text-muted">{{ $student->gender }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">Email</div>
                        <div class="col-sm-9 text-muted">{{ $student->user->email }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">DOB</div>
                        <div class="col-sm-9 text-muted">{{ $student->dob }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">NIC</div>
                        <div class="col-sm-9 text-muted">{{ $student->nic }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Guardian and Subjects -->
    <div class="row">
        @if($student->guardian)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-4">Guardian Details</p>
                    <div class="row">
                        <div class="col-sm-3">Full Name</div>
                        <div class="col-sm-9 text-muted">{{ $student->guardian->initials }} {{ $student->guardian->first_name }} {{ $student->guardian->last_name }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3">Phone No.</div>
                        <div class="col-sm-9 text-muted">{{ $student->guardian->phone_number }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3">NIC</div>
                        <div class="col-sm-9 text-muted">{{ $student->guardian->nic }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="mb-4">Assigned Subjects</p>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subject->code }}</td>
                                <td>{{ $subject->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
