<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyedia Diterima</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
            font-size: 24px;
            margin-bottom: 20px;
        }

        h4 {
            color: #2c3e50;
            font-size: 18px;
            margin-bottom: 10px;
        }

        p {
            margin-top: 20px;
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
        <h2 class="text-center mb-4">Penyedia Diterima</h2>
        <h4>Halo {{ $user->name }},</h4>
        <h4 class="mb-3">Selamat, penyedia Anda baru saja diterima. Terima kasih atas kerjasama Anda.</h4>
        <h4 class="mb-3">Anda sekarang dapat mengakses fitur lengkap kami sebagai penyedia.</h4>
        <p>
            <a href="{{ route('login') }}" class="btn btn-primary">
                Masuk ke Akun
            </a>
        </p>
        <h4 class="mt-4">Salam,</h4>
        <h4>Tim Kami</h4>
    </div>
</body>
</html>
