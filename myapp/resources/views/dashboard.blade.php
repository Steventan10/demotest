<h2>Halo, {{ $user }}</h2> {{-- ❌ Tidak di-escape --}}

<form method="POST" action="/submit">
    {{-- ❌ CSRF token tidak disertakan --}}
    Nama: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <button type="submit">Kirim</button>
</form>
