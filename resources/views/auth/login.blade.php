<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>

    @if(session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required value="{{ old('email') }}"><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label><input type="checkbox" name="remember"> Remember me</label><br>

        <button type="submit">Login</button>
    </form>

    <p><a href="{{ route('password.request') }}">Forgot your password?</a></p>
    <p><a href="{{ route('register') }}">Register</a></p>
</body>
</html>