
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
                        <p class="text-center" style="color: white">Reset Password</p>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username" style="color: white">Email Adderss</label>

                                    <input id="email" type="email" class="form-control underlined @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-group">
                                    <button type="submit"  class="btn btn-block btn-primary" style="color: white">
                                      Send Password Reset Link
                                    </button>
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

</html>

