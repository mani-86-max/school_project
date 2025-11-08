@extends('layouts.app') <!-- Or your base layout -->

@section('content')
<div class="d-flex" id="layoutSidenav">
    <!-- Sidebar -->
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="/teacher/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Students</div>
                <a class="nav-link" href="/teacher/students/add">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate"></i></div>
                    Add
                </a>
                <a class="nav-link" href="/teacher/students/show">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate"></i></div>
                    View
                </a>

                <div class="sb-sidenav-menu-heading">Announcements</div>
                <a class="nav-link" href="/teacher/announcements/create">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    Post
                </a>
                <a class="nav-link" href="/teacher/announcements/show">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    View
                </a>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="/teacher/profile">
                    <div class="sb-nav-link-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    Profile
                </a>
                <a class="nav-link" href="/teacher/settings">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Settings
                </a>
                <a class="nav-link" href="/logout">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="layoutSidenav_content">
        <main class="container-fluid mt-3">
            @yield('content')
        </main>
    </div>
</div>
@endsection
