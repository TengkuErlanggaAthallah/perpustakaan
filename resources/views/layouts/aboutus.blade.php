<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online - Tentang Kami</title>
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

        .about-container {
            padding: 50px 0;
        }

        .about-heading {
            font-size: 36px;
            color: #333333;
            margin-bottom: 30px;
            text-align: center;
        }

        .about-text {
            font-size: 18px;
            color: #555555;
            text-align: center;
            margin-bottom: 30px;
        }

        .team-section {
            text-align: center;
        }

        .team-member {
            display: inline-block;
            margin: 0 20px;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 3px solid #007bff;
        }

        .team-member-name {
            font-size: 20px;
            color: #333333;
            margin-top: 10px;
        }

        .team-member-role {
            font-size: 16px;
            color: #777777;
            margin-top: 5px;
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
                
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layouts.kategori') }}">Kategori Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layouts.Rakbuku') }}">Rak buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('layouts.aboutus') }}">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="about-container">
        <div class="container">
            <h2 class="about-heading">Tentang Kami</h2>
            <p class="about-text">Perpustakaan Online adalah platform yang didedikasikan untuk memfasilitasi pengguna dalam mencari dan membaca buku-buku berkualitas dari berbagai genre.</p>
            <div class="team-section">
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1">
                    <div class="team-member-name">Angga</div>
                    <div class="team-member-role">CEO & Founder</div>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1">
                    <div class="team-member-name">Radzy</div>
                    <div class="team-member-role">CEO & Founder</div>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1">
                    <div class="team-member-name">Bimo</div>
                    <div class="team-member-role">CEO & Founder</div>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 2">
                    <div class="team-member-name">Akmal</div>
                    <div class="team-member-role">Lead Developer</div>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 3">
                    <div class="team-member-name">Aiman</div>
                    <div class="team-member-role">Marketing Manager</div>
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
