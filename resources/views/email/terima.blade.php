<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyedia Diterima</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #3498db, #2c3e50);
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #2c3e50;
        }

        h2 {
            color: #3498db;
        }

        p {
            line-height: 1.6;
        }

        .button-link {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Penyedia Diterima</h2>
        <h4>Halo {{ $user->name }},</h4>
        <h4>Selamat, penyedia Anda baru saja diterima. Terima kasih atas kerjasama Anda.</h4>
        <h4>Anda sekarang dapat mengakses fitur lengkap kami sebagai penyedia.</h4>
        <p>
            <a href="{{ route('login') }}" class="button-link">
                Masuk ke Akun
            </a>
        </p>
        <h4>Salam,</h4>
        <h4>Tim Kami</h4>
    </div>
</body>
</html>
