<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2, p {
            margin: 0;
        }
        .profile-img {
            margin-top: 100px;
            width: 200px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px;
        }
        .profile-info {
            text-align: center;
        }
        .arrow-img {
            width: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('beranda') }}">
            <img src="\images/arrow.png" alt="Profile Picture" class="arrow-img">
        </a>        
        <img src="\images/profile.png" alt="Profile Picture" class="profile-img">
        <div class="profile-info">
            <h1>Nama Saya</h1><br>
            <p>Email: example@example.com</p>
            <p>Alamat: Jl. Contoh No. 123</p><br>
            <h2>Tentang Saya</h2>
            <p>Saya adalah seorang pengembang web</p>
        </div>
    </div>
</body>
</html>
