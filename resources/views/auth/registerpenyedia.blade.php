<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register penyedia</title>
</head>
<body>
    <form action="{{ route('registersave.penyedia') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">nama:</label>
        <input type="text" name="name" id="name">
        <label for="email">email:</label>
        <input type="text" name="email" id="email">
        <label for="password">password:</label>
        <input type="text" name="password" id="password">
        <label for="konfirmasi">konfirmasi:</label>
        <input type="text" name="konfirmasi" id="konfirmasi">
        <label for="name">nama:</label>
        <input type="text" name="id_kategori" id="name">
        <label for="email">email:</label>
        <input type="text" name="alamat" id="email">
        <label for="password">password:</label>
        <input type="text" name="telp" id="password">
        <label for="konfirmasi">konfirmasi:</label>
        <input type="text" name="foto" id="konfirmasi">


        <button type="submit">simpan</button>
    </form>
</body>
</html>
