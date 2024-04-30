@extends('layouts.template')

@section('judul')
Login
@endsection

@section('extracss')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('/tema/asset/img/unsikalogo.png')}}" rel="icon">
    <link href="{{asset('/tema/asset/img/unsikalogo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/tema/asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/tema/asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/tema/asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/tema/asset/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('/tema/asset/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('/tema/asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('/tema/asset/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/tema/asset/css/style.css')}}" rel="stylesheet">
@endsection

@section('main')
<section class="section register min-vh-80 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
    {{--
        <div class="flash-message">
            @foreach (['danger','warning','success','info'] as $msg)
                @if(Session::has('alert-'.$msg))
                    <p class="alert alert-{{$msg}}">
                        {{ Session::get('alert-'.$msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </p>

                @endif
            @endforeach
        </div> --}}

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="{{url('/login')}}" class="logo d-flex align-items-center w-auto">
                <img src="{{asset('/tema/asset/img/logo.png')}}" alt="">
                <span class="d-none d-lg-block">LASPIKA</span>
                </a>
            </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                </div>

              <form method="post" action="{{'/login'}}" class="row g-3 needs-validation" novalidate>
                @csrf

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="{{url('/register')}}">Create an account</a></p>
                    <p class="small mb-0"><a href="{{url('/forgotpassword')}}">Forgot Password</a></p>
                    <p class="small mb-0">Login with <a href="">Gmail</a></p>
                </div>
              </form>



            </div>
          </div>

        </div>
      </div>
    </div>

</section>
@endsection

