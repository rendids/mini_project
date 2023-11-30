<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyedia Diterima</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <h2 style="color: #28a745;">Penyedia Diterima</h2>
        <p>Halo {{ $user->name }},</p>
        <p>Selamat, penyedia Anda baru saja diterima. Terima kasih atas kerjasama Anda.</p>
        <p>Anda sekarang dapat mengakses fitur lengkap kami sebagai penyedia.</p>
        <p>
            <a href="{{ route('login') }}" style="text-decoration: none; padding: 10px 20px; background-color: #28a745; color: #fff; border-radius: 5px; display: inline-block;">
                Masuk ke Akun
            </a>
        </p>
        <p>Salam,</p>
        <p>Tim Kami</p>
    </div>
</body>
</html>
