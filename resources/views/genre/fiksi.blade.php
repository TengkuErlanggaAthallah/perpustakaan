    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        .book-card {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 50px;
            width: 200px;
        }

        .book-title {
            font-size: 20px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }

        .book-author {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }

        .book-description {
            font-size: 14px;
            color: #777777;
        }
        .image {
            margin-left: 23px;
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
        <form class="form-inline ml-auto">
            <input type="text" class="form-control search-box" placeholder="Cari buku...">
            <button class="search-button">Cari</button>
        </form>

        <!-- Navbar Links -->
        <div style="margin-left: 50px" class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
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
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Genre
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Fiksi</a>
                    <a class="dropdown-item" href="{{ route('genre.nonfiksi') }}">Non-Fiksi</a>
                    <a class="dropdown-item" href="#">Klasik</a>
                    <!-- Add more genre options as needed -->
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Book Cards -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="book-card">
                <img class="image" src="\images/aa.jpg" alt="Judul Buku 1">
                <div class="book-title">Judul Buku 1</div>
                <div class="book-author">Penulis Buku 1</div>
                <div class="book-description">Deskripsi singkat buku 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="book-card">
                <img class="image" src="\images/ee.jpg" alt="Judul Buku 2">
                <div class="book-title">Judul Buku 2</div>
                <div class="book-author">Penulis Buku 2</div>
                <div class="book-description">Deskripsi singkat buku 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="book-card">
                <img class="image" src="\images/th.jpg" alt="Judul Buku 3">
                <div class="book-title">Judul Buku 3</div>
                <div class="book-author">Penulis Buku 3</div>
                <div class="book-description">Deskripsi singkat buku 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
        <div class="col-md-3" style="width: 150px;">
            <div class="book-card">
                <img class="image" src="\images/ee.jpg" alt="Judul Buku 2">
                <div class="book-title">Judul Buku 2</div>
                <div class="book-author">Penulis Buku 2</div>
                <div class="book-description">Deskripsi singkat buku 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
        <div class="col-md-3" style="width: 150px;">
            <div class="book-card">
                <img class="image" src="\images/ee.jpg" alt="Judul Buku 2">
                <div class="book-title">Judul Buku 2</div>
                <div class="book-author">Penulis Buku 2</div>
                <div class="book-description">Deskripsi singkat buku 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
        </div>
    </div>
</div>
    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
