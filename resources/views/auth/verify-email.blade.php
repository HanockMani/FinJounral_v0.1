<!DOCTYPE html>
<html>
<head><title>Email Verification</title></head>
<body>
    <h2>Verify Your Email</h2>

    @if(session('status') === 'verification-link-sent')
        <p style="color: green;">A new verification link has been sent to your email.</p>
    @endif

    <p>Please check your email for a verification link before continuing.</p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Resend Verification Email</button>
    </form>

    <form method="POST" action="{{ route('logout') }}" style="margin-top: 10px;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>