<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Login</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <!-- <p class="login-box-msg">Register a new membership</p> -->
      
      @if(count($errors) > 0)
        <div style="color:red">
          @foreach ($errors->all() as $message)
            <ul>
                <li>{{$message}}</li>
            </ul>
          @endforeach
        </div>
      @endif

      @if (session()->has('error'))
          <div style="color:red">
            {{ session('error') }}
          </div>
      @endif

      <form action="{{ route('login') }}" method="post">
        
        @csrf

        
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4 offset-8">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>
      -->

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="{{ asset('assets/admin/js/admin.js') }}"></script>
</body>
</html>