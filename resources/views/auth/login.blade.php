<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/login.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>LOGIN</title>
</head>
<body>
    <div class="auth-page-wrapper pt-5">
    <!-- page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
        <canvas class="particles-js-canvas-el" width="1349" height="380" style="width: 100%; height: 100%;"></canvas>
    </div>

    <!-- page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-5 login-bg">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="d-inline-block auth-logo">
                                    <img src="{{url('/images/png-transparent-password-manager-user-computer-icons-password-safe-safe-blue-text-technic.png')}}" alt="JSLPS image" height="80" />
                                </div>
                                <h3 class="text-dark mt-3">Login</h3>
                            </div>
                            <form action="{{ route('login') }}" method="post">
                                @csrf

                            <div class="p-2 mt-3">
                                <div class="mb-3">
                                    <label for="username" class="form-label">{{ __('Email Address') }}</label>
                                    <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label class="form-label" for="password-input">{{ __('Password') }}</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input name="password" type="password" id="password" class="form-control pe-5 password-input @error('password') is-invalid @enderror" placeholder="Enter password" required autocomplete="current-password"/>
                                        @error('password')
                                         <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check" {{ old('remember') ? 'checked' : '' }}/>
                                    <label class="form-check-label" for="auth-remember-check">{{ __('Remember Me') }}</label>
                                     {{-- @if (Route::has('password.request'))
                                    <a class="text-muted float-end" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif --}}
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- card body -->
                    </div>
                    <!-- card -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- end page content -->
</div>
</body>
</html>