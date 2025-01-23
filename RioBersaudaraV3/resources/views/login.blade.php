<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/login.css">
    @include('layout.head')
</head>
<body>
    <main>
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
                <span class="input-icon my-2 me-2">&#128100;</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3 input-group">
                <span class="input-icon my-2 me-2">&#128274;</span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <button type="button" class="btn text-dark" id="togglePassword" style="margin-left: -1px;">&#128065; <!-- Icon untuk melihat password -->
                </button>
            </div>
            <script>
                document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.innerHTML = type === 'password' ? '&#128065;' : '&#128274;'; // Ubah icon
});
            </script>
            <button type="submit" class="btn-primary">Login</button>
        </form>
    </div>
</main>
    @include('layout.jscore')
</body>
</html>
