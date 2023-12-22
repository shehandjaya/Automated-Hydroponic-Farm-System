@extends('layouts.admin')

@section('content')
<style>
    img{
        height: 200px;
        width: 200px;
        border-radius: 50%;
        object-fit: cover;
        background: #dfdfdf;
    }

</style>
@if(session('message'))
<script>
    swal({
        title: "Profile Successfully Updated!!",
        icon: "success",
        button: "Ok!",
    });
</script>
@endif
<section class="section">
    <div class="row container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                    <h3 class="title"> Update Profile Details </h3>
                    <hr>
                <div class="row ">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-4">

                                    <img id="previewImage" src="{{asset(Auth::user()->avatar)}}" alt="Preview" >
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <form action="/UpdateAdminProfileFunc" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Name <span style="color: #85CE36">*</span></label>
                                @foreach ($data as $item )
                                <input type="text" class="form-control boxed" name="name" value="{{$item->name}}" placeholder="Enter Your Name........" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email <span style="color: #85CE36">*</span></label>
                                <input type="email" class="form-control boxed" name="email" value="{{$item->email}}" placeholder="Enter Your Email........" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="file" class="form-control boxed" name="imageInput" id="imageInput">
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update" >
                            </div>
                            @endforeach
                        </form>
                    </div>


                </div>



            </div>
        </div>
    </div>
</section>

<script>
    const imageInput = document.getElementById('imageInput');
    const previewImage = document.getElementById('previewImage');
    function previewSelectedImage() {
       const file = imageInput.files[0];
       if (file) {
          const reader = new FileReader();
          reader.readAsDataURL(file);
          reader.onload = function(e) {
             previewImage.src = e.target.result;
          }
       }
    }
    imageInput.addEventListener('change', previewSelectedImage);
 </script>

@endsection
