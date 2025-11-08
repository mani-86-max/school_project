<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'School Project') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Sidebar */
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background: #343a40;
            color: #fff;
        }
        #sidebar .nav-link {
            color: #fff;
        }
        #sidebar .nav-link:hover {
            background: #495057;
        }
        #sidebar .sb-sidenav-menu-heading {
            padding: 0.75rem 1rem;
            font-size: 0.85rem;
            text-transform: uppercase;
            color: #adb5bd;
        }
        /* Main content */
        #layoutSidenav_content {
            margin-left: 250px;
            padding: 1rem;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Sidebar -->
    <div id="sidebar" class="position-fixed">
        <div class="p-3">
            <a class="navbar-brand d-flex align-items-center mb-3" href="{{ url('/admin/dashboard') }}">
                <img src="{{ asset('school/school.png') }}" alt="School Logo" width="40" class="me-2">
                <span class="fw-bold">School Admin</span>
            </a>

            <div class="nav flex-column">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Manage</div>

                <a class="nav-link" data-bs-toggle="collapse" href="#studentsMenu" role="button">
                    <i class="fa-solid fa-user-graduate me-2"></i>Students
                </a>
                <div class="collapse" id="studentsMenu">
                    <a class="nav-link ps-5" href="/admin/students/create">Add</a>
                    <a class="nav-link ps-5" href="/admin/students/show">View</a>
                </div>

                <a class="nav-link" data-bs-toggle="collapse" href="#teachersMenu" role="button">
                    <i class="fa-solid fa-chalkboard-user me-2"></i>Teachers
                </a>
                <div class="collapse" id="teachersMenu">
                    <a class="nav-link ps-5" href="/admin/teachers/create">Add</a>
                    <a class="nav-link ps-5" href="/admin/teachers/show">View</a>
                </div>

                <a class="nav-link" data-bs-toggle="collapse" href="#subjectsMenu" role="button">
                    <i class="fa-solid fa-book me-2"></i>Subjects
                </a>
                <div class="collapse" id="subjectsMenu">
                    <a class="nav-link ps-5" href="/admin/subjects/create">Add</a>
                    <a class="nav-link ps-5" href="/admin/subjects/show">View</a>
                    <a class="nav-link ps-5" href="/admin/subjects/assign">Assign Teachers</a>
                </div>

                <a class="nav-link" data-bs-toggle="collapse" href="#streamsMenu" role="button">
                    <i class="fa-solid fa-school me-2"></i>Streams
                </a>
                <div class="collapse" id="streamsMenu">
                    <a class="nav-link ps-5" href="/admin/streams/create">Add</a>
                    <a class="nav-link ps-5" href="/admin/streams/show">View</a>
                </div>

                <a class="nav-link" data-bs-toggle="collapse" href="#classesMenu" role="button">
                    <i class="fa-solid fa-chalkboard me-2"></i>Classes
                </a>
                <div class="collapse" id="classesMenu">
                    <a class="nav-link ps-5" href="/admin/class/create">Add</a>
                    <a class="nav-link ps-5" href="/admin/class/show">View</a>
                </div>

                <div class="sb-sidenav-menu-heading mt-3">Addons</div>
                <a class="nav-link" href="/admin/profile"><i class="fa fa-user me-2"></i>Profile</a>
                <a class="nav-link" href="/admin/settings"><i class="fa-solid fa-gear me-2"></i>Settings</a>
                <a class="nav-link" href="/admin/messages"><i class="fa-solid fa-message me-2"></i>Messages</a>
                <a class="nav-link" href="/logout"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="layoutSidenav_content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
