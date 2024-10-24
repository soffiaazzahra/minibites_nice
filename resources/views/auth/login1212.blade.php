{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIBITES</title>
    <link rel="stylesheet" href="{{ asset('templateadmintle/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
        <form action="{{ route('auth.authenticate') }}" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ @old('email') }}">
                <i class='bx bxs-envelope'></i>
                @error('email')
                    <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-box">
                <input type="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Password" name="password">
                <i class='bx bxs-lock-alt'></i>
                @error('password')
                    <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have a account?  <a href="{{ route('register.create') }}">Register</a></p>
            </div>
        </form>
    </div>

</body>
</html> --}}
