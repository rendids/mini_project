{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard user</title>
</head>
<body>
    <h1>hallo {{ Auth::user()->name }}</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">logout</button>
    </form>
</body>
</html> --}}

@extends('layoutsuser.app')
@section('content')

<h1>INI ADALAH DASHBOARD<h1>

@endsection
