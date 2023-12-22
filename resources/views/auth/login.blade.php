<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Lankan Hydoponic </title>
        <link href="{{asset('webSiteImages/logonew.jpg')}}" rel="icon">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{asset('css/dashboard/vendor.css')}}">
        <!-- Theme initialization -->
       <link rel="stylesheet" id="theme-style" href="{{asset('css/dashboard/app-green.css')}}">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.transparent-card {
    background-color: rgba(151, 150, 150, 0.7); /* Adjust the last value (alpha) for transparency */
    border: none; /* Remove the border if you have any */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow for better visibility */
}
.form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    .input-group {
        position: relative;
    }

    #show-password {
        margin-top: 5px;
        margin-left: 10px;
        cursor: pointer;
    }

    #show-password-label {
        margin-bottom: 0;
        color: white;
        cursor: pointer;
    }

    #show-password-label:hover {
        text-decoration: underline;
    }

    /* Add this style to change the cursor to a pointer when hovering over the "Show Password" label */
    #show-password-label:hover {
        cursor: pointer;
    }
    .pressed {
            color: rgb(100, 172, 255) !important;
        }
</style>

    </head>
    <body>

        <div class="auth">
            <div class="auth-container">
                <div class="card transparent-card" >
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div> <span style="color: white"> Lankan Hydoponic</span>
                        </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center" style="color: white">LOGIN TO CONTINUE</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username" style="color: white">Username</label>
                                <input id="email" type="email" class="form-control underlined @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                {{-- <input type="email" class="form-control underlined" name="username" id="username" placeholder="Your email address" required> --}}
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" style="color: white">Password</label>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control underlined @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye" id="toggle-password" style="cursor: pointer;"></i>


                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="remember">

                                    <input class="checkbox" id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <span style="color: white">Remember me</span>
                                </label>

                                @if (Route::has('password.request'))
                                <a class="forgot-btn pull-right" href="{{ route('password.request') }}" style="color: white">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary" style="color: white">Login</button>
                            </div>
                            <div class="form-group">
                                <p class="text-center" style="color: white">Do not have an account? <a href="/register" style="color: white">Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/" class="btn btn-secondary btn-sm" style="color: rgb(117, 117, 117)">
                        <i class="fa fa-arrow-left"></i> Back to Web </a>
                </div>
            </div>
        </div>
    </body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var passwordInput = document.getElementById("password");
            var togglePasswordIcon = document.getElementById("toggle-password");

            var isMouseDown = false;

            togglePasswordIcon.addEventListener("mousedown", function () {
                isMouseDown = true;
                passwordInput.type = "text";
                togglePasswordIcon.classList.add("pressed"); // Add a class for the pressed state
            });

            document.addEventListener("mouseup", function () {
                if (isMouseDown) {
                    isMouseDown = false;
                    passwordInput.type = "password";
                    togglePasswordIcon.classList.remove("pressed"); // Remove the class for the normal state
                }
            });
        });
    </script>







</html>
