<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/logos/testlogo.jpeg">
    <title>Login - Rio Bersaudara</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="login-box">
        <h3>Login to Rio Bersaudara</h3>

        <!-- Tampilkan pesan kesalahan jika ada -->
        @if ($errors->any())
        <div class="error-message" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
            <strong>Lah?</strong> {{ $errors->first('error') }}
        </div>
        @endif

        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="mb-3 input-group">
                <span class="input-icon">&#128100;</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3 input-group">
                <span class="input-icon">&#128274;</span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-primary">Login</button>
        </form>
    </div>
    <script>
        document.querySelector('.btn-primary').addEventListener('mousemove', function(e) {
            const x = e.clientX / window.innerWidth * 100;
            const y = e.clientY / window.innerHeight * 100;
            this.style.backgroundPosition = `${x}% ${y}%`;
        });
    </script>
</body>
</html>
