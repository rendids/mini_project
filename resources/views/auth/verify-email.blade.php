<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin-bottom: 30px;
        }

        button {
            background-color: #0011ff;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0011ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verifikasi Email</h1>

        <p>Silakan klik tombol di bawah ini untuk mengirim ulang email verifikasi:</p>

        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button type="submit">Klik untuk Verifikasi Ulang</button>
        </form>
    </div>
</body>
</html>
