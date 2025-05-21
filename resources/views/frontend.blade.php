<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree Laravel</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #c0af96a7;
            display: flex;
            justify-content: center;
            padding: 32px 16px;
            color: #ffffff;
        }

        .container {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 28px;
        }

        .profile-container {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 12px;
            background-color: #f5f3f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .profile-name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #ffffff;
            text-align: center;
        }

        .tagline {
            font-size: 14px;
            color: #ffffff;
            text-align: center;
            margin-bottom: 16px;
        }

        .links {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .link-item {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            background-color: #eceae6a7;
            color: #5a4f47d1;
            text-decoration: none;
            padding: 14px 16px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.2s ease-in-out, transform 0.1s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.258);
        }

        .link-item:hover {
            background-color: #e9e4dd;
            transform: scale(1.02);
        }

        .link-item i {
            margin-right: 16px;
            font-size: 20px;
            color: #5a4f47d1;
        }

        .link-item span {
            text-align: left;
            display: flex;
            align-items: center;
        }

        .dots {
            text-align: right;
            color: #999;
            font-size: 18px;
            font-weight: bold;
        }

        footer {
            font-size: 14px;
            color: #ffffffcd;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="profile-container">
                <img src="{{ asset('img/tq.png') }}" alt="Profile" class="profile-img">
            </div>
            <h1 class="profile-name">Linktree Laravel Project</h1>
            <p class="tagline">Keisha Adisti Athaillah | 5026231137</p>
        </div>

        <div class="links">
            <a href="{{ url('/latihan_ets') }}" class="link-item">
                <i class="fas fa-pen"></i>
                <span>Latihan ETS</span>
                <span class="dots">...</span>
            </a>
            <a href="{{ url('/linktree') }}" class="link-item">
                <i class="fas fa-link"></i>
                <span>Linktree Task</span>
                <span class="dots">...</span>
            </a>
            <a href="{{ url('/ets') }}" class="link-item">
                <i class="fas fa-book"></i>
                <span>ETS</span>
                <span class="dots">...</span>
            </a>
            <a href="{{ url('/pertama') }}" class="link-item">
                <i class="fas fa-newspaper"></i>
                <span>Pertama</span>
                <span class="dots">...</span>
            </a>
            <a href="{{ url('/code') }}" class="link-item">
                <i class="fas fa-code"></i>
                <span>Coba Bootstrap</span>
                <span class="dots">...</span>
            </a>
            <a href="{{ url('/bootstrap') }}" class="link-item">
                <i class="fab fa-bootstrap"></i>
                <span>Halaman Bootstrap</span>
                <span class="dots">...</span>
            </a>

        </div>

        <footer>
            <p>&copy; 2025 - Linktree Laravel by Keisha</p>
        </footer>
    </div>
</body>

</html>
