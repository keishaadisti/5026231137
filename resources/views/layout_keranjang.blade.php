<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>keisha_store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffe6f0;
        }
        .navbar {
            background-color: #ffcce0;
        }
        .alert-success {
            background-color: #ccffe6;
        }
        .alert-danger {
            background-color: #ffcccc;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">🛍️ keisha_store</span>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
