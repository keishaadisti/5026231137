<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keisha Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffeef5;
        }
        .logo {
            width: 40px;
            margin-right: 10px;
        }
        .btn-pink {
            background-color: #f497b6;
            border: none;
            color: white;
        }
        .btn-green {
            background-color: #a4d4ae;
            color: white;
        }
        .btn-red {
            background-color: #f76c6c;
            color: white;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
