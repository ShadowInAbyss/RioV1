<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Rio Bersaudara</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="landing-container">
        <h1>Sign Up - Rio Bersaudara</h1>
        <div class="login-box">
            <h3>Create a new account</h3>
            <!-- Sign Up Form -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3 input-group">
                    <span class="input-icon">&#128100;</span>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-icon">&#128274;</span>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-icon">&#128274;</span>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <button type="submit" class="btn-primary">Sign Up</button>
            </form>
            <a href="{{ route('login') }}" class="btn-link">Already have an account? Log in here</a>
        </div>
    </div>
</body>
</html>
