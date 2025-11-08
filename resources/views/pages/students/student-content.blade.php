<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Navbar (static, non-collapsible) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMS</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/student/dashboard">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a class="nav-link" href="/student/profile">
                    <i class="fa fa-user"></i> Profile
                </a>
                <a class="nav-link" href="/student/settings">
                    <i class="fa-solid fa-gear"></i> Settings
                </a>
                <a class="nav-link" href="/logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container-fluid">
        @yield('content')
    </div>

</body>
</html>
