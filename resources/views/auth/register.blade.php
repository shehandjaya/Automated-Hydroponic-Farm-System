<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Lankan Hydoponic </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="{{asset('webSiteImages/logonew.jpg')}}" rel="icon">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{asset('css/dashboard/vendor.css')}}">
        <!-- Theme initialization -->
       <link rel="stylesheet" id="theme-style" href="{{asset('css/dashboard/app-green.css')}}">
       <link rel="stylesheet" id="theme-style" href="{{asset('css/app.css')}}">

       <style>
        .transparent-card {
            background-color: rgba(151, 150, 150, 0.7); /* Adjust the last value (alpha) for transparency */
            border: none; /* Remove the border if you have any */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow for better visibility */
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
                        <p class="text-center" style="color: white">SIGNUP TO GET INSTANT ACCESS</p>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="firstname" style="color: white">Name</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{-- <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required=""> --}}
                                        <input id="name" type="text" class="form-control underlined @error('name') is-invalid @enderror" name="name" placeholder="Enter User Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" style="color: white">Email</label>
                                {{-- <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> --}}
                                <input id="email" type="email" class="form-control underlined @error('email') is-invalid @enderror" name="email" placeholder="Enter email address" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="avatar" style="color: white">Avetar</label>
                                <input type="file" class="form-control underlined " name="avatar" placeholder="Seletect Your Avatar" value="{{ old('avatar') }}" autocomplete="avatar">

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">   <label for="password" style="color: white">Password</label></div>
                        <div class="col-sm-6"> <label for="password" style="color: white">Confirm Password</label></div>
                      </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        {{-- <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> --}}

                                        <input id="password" type="password" class="form-control underlined @error('password') is-invalid @enderror"  placeholder="Enter password" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        {{-- <input type="password" class="form-control " name="retype_password" id="retype_password" placeholder="Re-type password" required=""> --}}


                                         <input id="password-confirm" type="password" class="form-control underlined" name="password_confirmation" required autocomplete="new-password" placeholder="Re-type password">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            </div>
                            <div class="form-group">
                                <p class=" text-center" style="color: white">Already have an account? <a href="/login" style="color: white">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="text-center">
                    <a href="/" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Back to Web </a>
                </div> --}}
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
  <script src="{{asset('js/dashboard/vendor.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
