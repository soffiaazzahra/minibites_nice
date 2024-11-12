<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MINIBITES</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('templateadmintle/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('templateadmintle/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('templateadmintle/dist/css/adminlte.min.css') }}">
  
    <!-- Custom Styles -->
    <style>
      /* Menambahkan background gambar ke halaman login */
      body {
        background-image: url('{{ asset('nice/images/assorted-pastry-near-raisins-nuts.jpg') }}');
        background-size: cover;
        background-position: center;
      }
  
      .login-box {
        background: rgba(255, 255, 255, 0.7); /* Menambahkan transparansi */
        padding: 20px;
        border-radius: 8px;
      }

      .btn-primary {
    background-color: #CD3449;
    border-color: #CD3449;
  }

  .btn-primary:hover {
    background-color: #B82F41;
    border-color: #B82F41;
  }

  .card-outline.card-primary {
    border-top: 3px solid #CD3449;
  }

  .card-primary.card-outline .card-header a {
    color: #CD3449;
  }

  .card-primary.card-outline .card-header a:hover {
    color: #B82F41;
  }
    </style>
  </head>
  
<body class="hold-transition login-page">
<div class="login-box">
  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
  @endif
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="landing" class="h1"><b>MINIBITES</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @error('notif')
        <p class="login-box-msg error invalid-feedback" style="display: inline;">{{ $message }}</p>
      @enderror
      <form action="{{ route('auth.authenticate') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ @old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
            <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="row">
          <!-- /.col -->
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="{{ route('register.create') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('templateadmintle/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templateadmintle/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templateadmintle/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
