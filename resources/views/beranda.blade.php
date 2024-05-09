<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Online</a>
            <form class="d-flex">
                <input type="text" class="form-control search-box" placeholder="Cari buku...">
                <button class="search-button" type="submit">Cari</button>
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul style="margin-left: 150px" class="navbar-nav ms-auto" style="display: flex; justify-content: space-between;">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layouts.kategori') }}">Kategori Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layouts.Rakbuku') }}">Rak buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layouts.aboutus') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layouts.profile') }}">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>                
            </div>
        </div>
    </nav>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
