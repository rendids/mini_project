<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form method="POST" action="{{ route('login.proses') }}">
        @csrf
        <label for="name">nama:</label>
        <input type="text" name="name" id="name">
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <button type="submit">btn</button>
    </form>
</body>
</html>
