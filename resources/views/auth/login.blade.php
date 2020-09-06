<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Gym Center System Palembang">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <title>Gym Center System</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('assets/css/cassie.css') }}">

  </head>
  <body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="signin-panel">
          <svg-to-inline path="http://themepixels.me/cassie/assets/svg/citywalk.svg" class-Name="svg-bg"></svg-to-inline>

          <div class="signin-sidebar">
            <div class="signin-sidebar-body">
              <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>cassie</span></a>
              <h4 class="signin-title">Welcome back!</h4>
              <h5 class="signin-subtitle">Please signin to continue.</h5>

              <div class="signin-form">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter your email address" value="nia@gmail.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                  
                </div>

                <div class="form-group">
                  <label class="d-flex justify-content-between">
                    <span>Password</span>
                    <a href="" class="tx-13">Forgot password?</a>
                  </label>
                  <input type="password" name="password" class="form-control" placeholder="Enter your password" value="niak1234">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                  
                </div>

                <div class="form-group d-flex mg-b-0">
                  <button class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
                  <a href="page-signup.html" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign Up</a>
                </div>

                <div class="divider-text mg-y-30">Or</div>

                <a href="dashboard-one.html" class="btn btn-facebook btn-uppercase btn-block">Login with Facebook</a>
              </div>
              <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p>
            </div><!-- signin-sidebar-body -->
          </div><!-- signin-sidebar -->
        </div><!-- signin-panel -->
    </form>
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signin-sidebar', {
          suppressScrollX: true
        });

      })
    </script>
    <script src="{{ asset('assets/js/svg-inline.js') }}"></script>
  </body>
</html>
