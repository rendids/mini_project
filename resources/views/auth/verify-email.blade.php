<form action="{{ route('verification.send') }}" method="POST">
    @csrf
    <button type="submit">klik untuk verifikasi ulang</button>
</form>
