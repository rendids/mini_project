<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyedia Ditolak</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(to right, #db5534, #a5644a);
    }

    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(173, 70, 70, 0.747);
        color: #92491b;
    }

    
</style>
<body>
    <div class="container">
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <h2 style="color: #e44d26;">Penyedia Ditolak</h2>
        <p>Halo {{ $user->name }},</p>
        <p>Maaf, penyedia Anda baru saja ditolak. Silakan hubungi administrator untuk informasi lebih lanjut.</p>
        <p>Terima kasih atas pemahaman Anda.</p>
        <p>Salam,</p>
        <p>Tim Kami</p>
    </div>
</div>
</body>
</html>
