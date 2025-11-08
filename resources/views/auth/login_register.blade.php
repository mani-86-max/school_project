<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management - Login / Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- 🔹 Main Logo Above Everything -->
    <div class="text-center mt-4">
        <h2 class="mt-2 fw-bold">School Management System</h2>
    </div>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button">Register</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="authTabsContent">
                    <!-- Login -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="{{ asset('school/school.png') }}" alt="School Logo" width="70">
                                    <h5 class="mt-2">Welcome Back!</h5>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Register -->
                    <div class="tab-pane fade" id="register" role="tabpanel">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="{{ asset('school/school.png') }}" alt="School Logo" width="70">
                                    <h5 class="mt-2">Create Your Account</h5>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email_reg" class="form-label">Email</label>
                                        <input type="email" name="email" id="email_reg" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_reg" class="form-label">Password</label>
                                        <input type="password" name="password" id="password_reg" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
