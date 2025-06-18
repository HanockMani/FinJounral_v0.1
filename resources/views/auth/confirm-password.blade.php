<!DOCTYPE html>
<html>
<head>
    <title>Confirm Password</title>
</head>
<body>
    <h2>Confirm Password</h2>

    <p>This is a secure area of the application. Please confirm your password before continuing.</p>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label for="password">Password:</label><br>
        <input id="password" type="password" name="password" required autocomplete="current-password"><br><br>

        <button type="submit">Confirm</button>
    </form>
</body>
</html>