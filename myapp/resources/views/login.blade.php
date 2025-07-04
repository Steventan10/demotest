<form method="POST" action="/login">
    {{-- ❌ CSRF protection tidak ada --}}
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
