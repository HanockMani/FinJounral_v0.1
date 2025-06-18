<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            padding-top: 100px;
            background-color: #f5f5f5;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .btn {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 4px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Application</h1>

    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ Auth::user()->getDashboardRoute() }}" class="btn">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn">Register</a>
                @endif
            @endauth
        </div>
    @endif
</body>
</html>
