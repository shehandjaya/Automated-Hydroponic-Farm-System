@extends('layouts.admin')

@section('content')
@if(session('message'))
<script>
    swal({
        title: "Password Successfully Changed",
        icon: "success",
        button: "Ok!",
    });
</script>
@endif
<div class="container">
    @if(session('error'))
        <div class="alert alert-danger" role="alert"   id="alertSuccessHide">
    {{session('error')}}
</div>
@endif
<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <div class="title-block">
                    <h3 class="title"> Change Acount Password </h3>
                    <hr>
                </div>
                <form action="/ChangeAdminPasswordFunc" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Current Password</label>

                        <input type="password" class="form-control boxed" required name="current_password"  placeholder="Enter Your Current Password........" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">New Password</label>
                        <input type="password" class="form-control boxed" required name="new_password" placeholder="Enter Your New Password........" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Confirm New Password</label>
                        <input type="password" class="form-control boxed" required name="new_password_confirmation"  placeholder="Enter Your Confirm Password........" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Change Password" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection




