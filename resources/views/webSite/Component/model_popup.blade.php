<style>
    .modal_new {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0.0;
        visibility: hidden;
        transform: scale(1.1);
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
    }

    .modal_new_reg {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0.0;
        visibility: hidden;
        transform: scale(1.1);
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
    }

    /* .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 1rem 1.5rem;
        width: 35rem;
        border-radius: 0.5rem;
    } */

    .close-button {
        float: left;
        width: 1.5rem;
        line-height: 1.5rem;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: lightgray;
        margin-left: 480px
    }

    .close-button:hover {
        background-color: #9ABF69;
    }

    .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 0s linear 0s, opacity 0.65s 0s, transform 0.55s;
        backdrop-filter: blur(4px);
    }

    .show-modal_reg {
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 1s linear 0s, opacity 0.65s 0s, transform 0.55s;
        backdrop-filter: blur(4px);
    }


    .show_modal_log{
        opacity: 1;
        visibility: visible;
        transform: scale(1.0);
        transition: visibility 1s linear 0s, opacity 0.65s 0s, transform 0.55s;
        backdrop-filter: blur(4px);
    }

    .hideRegFormWhwnLog {
        visibility: hide;
        transition: visibility 1s linear 0s, opacity 0.65s 0s, transform 0.55s;
    }



    /* .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 1rem 1.5rem;
        width: 35rem;
        border-radius: 0.5rem;
    } */

    .close_button_reg {
        float: left;
        width: 1.5rem;
        line-height: 1.5rem;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: lightgray;
        margin-left: 480px
    }

    .close_button_reg:hover {
        background-color: #9ABF69;
    }

</style>

<div class="modal_new">
    <div class="modal-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 1rem 1.5rem; width: 35rem; border-radius: 0.5rem;" >
        <span class="close-button">×</span>
        <div class="auth mt-2">
            <div class="auth-container">
                <div class="card">
                    <div class="card-body">
                        <header class="auth-header">
                            <h3 class="auth-title text-center" >
                                LOGIN TO CONTINUE
                            </h3><hr style="background-color: #9ABF69">
                        </header><br>
                        <div class="auth-content">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group ">
                                    <label for="username">Username</label>
                                    <input id="email" type="email"
                                        class="form-control underlined @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control underlined @error('password') is-invalid @enderror"
                                        name="password" required
                                        autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group mt-3">
                                    <label for="remember">
                                        <input class="checkbox" id="remember" type="checkbox">
                                        <span>Remember me</span>
                                    </label>

                                    @if (Route::has('password.request'))
                                    <a class="forgot-btn pull-right"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                                <div class="form-group mt-3 text-center">
                                    <button type="submit" class="btn btn-block btn-primary"
                                        style="width: 100%">Login</button>
                                </div>
                                <div class="form-group mt-3">
                                    <p class="text-muted text-center">Do not have an account? <a
                                            href="#"  id="trigger_Reg_logForm" onclick="toggleModalRLogINForm();">Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal_new_reg">
    <div class="modal-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 1rem 1.5rem; width: 35rem; border-radius: 0.5rem;">
        <span class="close_button_reg">×</span>

        <div class="auth mt-2">
            <div class="auth-container">
                <div class="card">
                    <div class="card-body">
                    <header class="auth-header">
                        <h3 class="auth-title" style="text-align: center"> SIGNUP TO GET INSTANT ACCESS
                        </h3><hr style="background-color: #9ABF69">
                    </header>
                    <div class="auth-content mt-4">
                        <form method="POST" action="{{ route('register') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="firstname">Name</label>
                                <div class="row ">
                                    <div class="col-sm-12">
                                        {{-- <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Enter firstname" required=""> --}}
                                        <input id="name" type="text"
                                            class="form-control underlined @error('name') is-invalid @enderror"
                                            name="name" placeholder="Enter User Name"
                                            value="{{ old('name') }}" required
                                            autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required="">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="form-group  mt-3">
                                <label for="email">Email</label>
                                {{-- <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required=""> --}}
                                <input id="email" type="email"
                                    class="form-control underlined @error('email') is-invalid @enderror"
                                    name="email" placeholder="Enter email address"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group  mt-3">
                                <label for="avatar">Avetar</label>
                                <input type="file" class="form-control underlined "
                                    name="avatar" placeholder="Seletect Your Avatar"
                                    value="{{ old('avatar') }}" autocomplete="avatar">

                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group  mt-3">
                                <div class="row">
                                    <div class="col-sm-6"> <label
                                            for="password">Password</label></div>
                                    <div class="col-sm-6"> <label for="password">Confirm
                                            Password</label></div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-6">
                                        {{-- <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> --}}

                                        <input id="password" type="password"
                                            class="form-control underlined @error('password') is-invalid @enderror"
                                            placeholder="Enter password" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        {{-- <input type="password" class="form-control " name="retype_password" id="retype_password" placeholder="Re-type password" required=""> --}}


                                        <input id="password-confirm" type="password"
                                            class="form-control underlined"
                                            name="password_confirmation" required
                                            autocomplete="new-password"
                                            placeholder="Re-type password">

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="agree">
                                    <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                                    <span>Agree the terms and <a href="#">policy</a></span>
                                </label>
                            </div> --}}
                            <div class="form-group  mt-3">
                                <button type="submit" class="btn btn-block btn-primary" style="width: 100%">Sign
                                    Up</button>
                            </div>
                            {{-- <div class="form-group  mt-2">
                                <p class="text-muted text-center">Already have an account? <a
                                        href="#"  id="trigger_Reg_RegForm" onclick="toggleModalRRegINForm();">Login</a></p>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>