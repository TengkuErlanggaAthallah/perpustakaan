<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            
        }

        .navbar {
            background-color: #242427;
        }

        .navbar-brand {
            color: #ffffff;
            font-size: 24px;
            margin-right: 50px;
        }

        .search-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .search-box {
            width: 200px;
            height: 10px;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .search-button {
            margin-left: 20px;
            padding: 5px 10px;
            background-color: #007bff;
            border: none;
            color: #ffffff;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Perpustakaan Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Search Box -->
        <form style="display: flex" class="form-inline ml-auto">
            <input type="text" class="form-control search-box" placeholder="Cari buku...">
            <button class="search-button">Cari</button>
        </form>

        <!-- Navbar Links -->
        <div style="margin-left: 50px" class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="margin-left: 10px; display: flex; justify-content: space-between;">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('layouts.kategori') }}">Kategori Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('layouts.Rakbuku') }}">Rak buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('layouts.aboutus') }}">Tentang Kami</a>
                </li>
            </ul>
            <!-- Genre Buttons -->
            <div class="dropdown">
                <button style="margin-left: 25px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Genre
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('genre.fiksi') }}">Fiksi</a>
                    <a class="dropdown-item" href="{{ route('genre.nonfiksi') }}">Non-Fiksi</a>
                    <a class="dropdown-item" href="#">Klasik</a>
                    <!-- Add more genre options as needed -->
                </div>
            </div>
        </div>
    </div>
</nav>
    <!-- External Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
