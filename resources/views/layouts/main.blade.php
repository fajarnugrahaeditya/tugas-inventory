<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventaris</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="#">
                InventarisKu
            </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">

                    {{-- PRODUK --}}
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('products.index') }}">
                            Produk
                        </a>
                    </li>

                    {{-- KATEGORI --}}
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('categories.index') }}">
                            Kategori
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    {{-- CONTENT --}}
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">
                &copy; {{ date('Y') }}
                Aplikasi Inventaris.
                Hak Cipta Dilindungi.
            </p>
        </div>
    </footer>

</body>
</html>