@extends('layouts.admin')

@section('content')
@if(session('message'))
<div class="alert alert-success" role="alert"   id="alertSuccessHide">
{{session('message')}}
</div>
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
                    <h3 class="title"> Add Items To Store </h3>
                    <hr>
                </div>
                <form action="/storeItemDetais" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="control-label">Item Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control boxed" required name="item_name" placeholder="Enter Your New Password........" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Item Description <span style="color: red">*</span></label>
                        {{-- <input type="text" class="form-control boxed" required name="new_password_confirmation"  placeholder="Enter Your Confirm Password........" required> --}}
                        <textarea name="" id="" class="form-control boxed" name="item_description"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Item Image <span style="color: red">*</span></label>
                        <input type="file" class="form-control boxed" required name="item_image"  placeholder="Enter Your Confirm Password........" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Item Price <span style="color: red">*</span></label>
                        <input type="number" class="form-control boxed" required name="item_price"  placeholder="Enter Your Confirm Password........" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label"> Item Discount (Optional)</label>
                        <input type="number" class="form-control boxed" name="item_discount"  placeholder="Enter Your Confirm Password........" required>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Add Details" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection




