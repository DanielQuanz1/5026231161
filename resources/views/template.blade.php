<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Muhammad Daniel Alfarisi : 5026231161')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">

    <!-- Elegant Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
            color: #002147;
            font-family: 'Open Sans', sans-serif;
        }

        .jumbotron {
            background-color: #002147;
            color: white;
            padding: 2rem 1rem;
            margin-bottom: 0;
            border-radius: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            animation: fadeSlideIn 1.2s ease-out forwards;
            opacity: 0;
            transform: translateY(-20px);
        }

        .jumbotron h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .navbar {
            background-color: #ffffff;
            border-bottom: 2px solid #002147;
        }

        .navbar-nav .nav-link {
            color: #002147 !important;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .navbar .container {
            display: flex;
            justify-content: center;
        }

        .navbar-nav {
            flex-direction: row;
        }
        .navbar-nav .nav-link:hover {
            background-color: #002147;
            color: white !important;
            border-radius: 5px;
        }

        .container {
            padding-top: 30px;
        }

        footer {
            margin-top: 40px;
            padding: 15px;
            background-color: #002147;
            color: white;
            text-align: center;
        }

        @keyframes fadeSlideIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .table-box {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    padding: 25px;
    margin-bottom: 40px;
    transition: transform 0.3s ease;
}

.table thead {
    background: linear-gradient(to right, #001f3f, #004080);
    color: white;
    border-radius: 12px 12px 0 0;
}

.table tbody tr {
    transition: background-color 0.2s ease-in-out;
}

.table tbody tr:hover {
    background-color: #f2f6ff;
}

.table td,
.table th {
    vertical-align: middle;
    padding: 12px 16px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 15px;
}

    </style>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>5026231161 : Muhammad Daniel Alfarisi</h1>
        <p>Sistem CRUD Laravel</p>
    </div>

    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend">Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vga">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pagecounter">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; 2025 Muhammad Daniel Alfarisi | SISTEM INFORMASI ITS
    </footer>

</body>

</html>
