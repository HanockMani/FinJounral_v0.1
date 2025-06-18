<!DOCTYPE html>
<html>
<head><title>Forgot Password</title></head>
<body>
    <h2>Forgot Your Password?</h2>

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

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label>Email:</label>
        <input type="email" name="email" required value="{{ old('email') }}"><br>

        <button type="submit">Send Password Reset Link</button>
    </form>

    <p><a href="{{ route('login') }}">Back to Login</a></p>
</body>
</html>