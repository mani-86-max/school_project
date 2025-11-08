<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'School Management System') }}</title>

    <!-- ✅ Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ✅ Vite CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="min-vh-100 d-flex flex-column">

        <!-- ✅ Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('school/school.png') }}" alt="School Logo" width="45" height="45" class="me-2 rounded">
                    <span class="fw-bold text-primary">School Management System</span>
                </a>

                @auth
                <div class="ms-auto d-flex align-items-center">
                    <span class="me-3">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                    </form>
                </div>
                @endauth
            </div>
        </nav>

        <div class="container-fluid flex-grow-1">
            <div class="row">

                <!-- ✅ Sidebar -->
                <nav class="col-md-2 d-none d-md-block bg-white sidebar shadow-sm">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('admin/dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/students*') ? 'active' : '' }}" href="{{ url('admin/students') }}">
                                    Students
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/teachers*') ? 'active' : '' }}" href="{{ url('admin/teachers') }}">
                                    Teachers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/subjects*') ? 'active' : '' }}" href="{{ url('admin/subjects') }}">
                                    Subjects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/settings') ? 'active' : '' }}" href="{{ url('admin/settings') }}">
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- ✅ Main Content -->
                <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                    @yield('content')
                </main>

            </div>
        </div>

        <!-- ✅ Footer -->
        <footer class="bg-white border-top text-center py-3 mt-auto">
            <small>© {{ date('Y') }} School Management System. All rights reserved.</small>
        </footer>

    </div>

    <!-- ✅ Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
