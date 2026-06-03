<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        /* Navbar */
        .navbar {
            background-color: #212529;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        /* menu aktif */
        .nav-link.active {
            background-color: #0d6efd;
            border-radius: 5px;
            color: white !important;
        }

        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/home">
            Inventory App
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}"
                       href="/home">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}"
                       href="/products">
                        Product
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories*') ? 'active' : '' }}"
                       href="/categories">
                        Category
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

    <!-- CONTENT -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="mt-auto">
        © 2026 Inventory App - Manajemen Informatika PNP
    </footer>

</body>
</html>