@extends('layouts.admin')

@section('content')
@if (session('message'))
<div class="alert alert-sucess" style="background-color: #85CE36;color:white" role="alert" id="alertSuccessHide">
   {{ session('message') }}
</div>
@endif
<button type="button" class="btn btn-primary rounded-sm" data-toggle="modal" data-target="#exampleModal">
    Upload New Image
  </button>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload New Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="/uploadSiderImage" enctype="multipart/form-data">
            @csrf
        <label for="images" class="drop-container" id="dropcontainer">
            <span class="drop-title">Drop Slider Image Here</span>
            or
            <input type="file" id="images" name="image" accept="image/*" required>
          </label>
          <img id="image-preview" src="" alt="Image Preview" style="max-width: 100%; max-height: 25%; display: none;">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <br><br>
<section class="section">
    <div class="row container">
        <div class="col-md-12">
                <h3 class="title">Manage Web Silder Images</h3>
                <hr>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $image)
                                            <tr>
                                                <td style="width: 50%"><img src="{{$image->image_name}}" style="width: 20%;height:10%" alt=""></td>
                                                <td>
                                                    @if ($image->status == 1)
                                                    <span class="badge badge-success" style="width: 50px">ON</span>
                                                    @else
                                                    <span class="badge badge-danger" style="width: 50px">OFF</span>
                                                    @endif

                                                </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger delete-button rounded-sm" data-image-id="{{ $image->id }}">
                                                            <em class="fa fa-trash-o"></em>
                                                        </a>
                                                    </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- delete button script --}}
<script>
    $(document).ready(function () {
    $('.delete-button').on('click', function (event) {
        event.preventDefault();
        const imageId = $(this).data('image-id');
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#72B22B',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send an AJAX request to delete the user

                $.ajax({
                    url: `/removeWebImageAdmin/${imageId}`,
                    type: 'get',
                    success: function (response) {
                        if (response.message === 'Slider Image deleted successfully') {
                            Swal.fire(
                                'Deleted!',
                                'The user has been deleted.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });

                        }
                    },
                    error: function () {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the user.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});


const dropContainer = document.getElementById("dropcontainer")
  const fileInput = document.getElementById("images")

  dropContainer.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)

  dropContainer.addEventListener("dragenter", () => {
    dropContainer.classList.add("drag-active")
  })

  dropContainer.addEventListener("dragleave", () => {
    dropContainer.classList.remove("drag-active")
  })

  dropContainer.addEventListener("drop", (e) => {
    e.preventDefault()
    dropContainer.classList.remove("drag-active")
    fileInput.files = e.dataTransfer.files
  })


</script>

<script>
    // Function to handle file input change event
    function handleFileSelect() {
      const fileInput = document.getElementById('images');
      const imagePreview = document.getElementById('image-preview');

      // Check if a file is selected
      if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        // Set up a callback function to display the image
        reader.onload = function (e) {
          imagePreview.src = e.target.result;
          imagePreview.style.display = 'block'; // Show the image
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(fileInput.files[0]);
      } else {
        // If no file is selected, hide the image preview
        imagePreview.style.display = 'none';
      }
    }
    </script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
      // Get the file input and image preview elements
      var input = document.getElementById('images');
      var preview = document.getElementById('image-preview');

      // Listen for the file input change event
      input.addEventListener('change', function () {
        // Check if a file is selected
        if (input.files && input.files[0]) {
          // Create a FileReader object to read the selected file
          var reader = new FileReader();

          // Set the callback function for when the file is loaded
          reader.onload = function (e) {
            // Set the image preview source to the loaded image data
            preview.src = e.target.result;
            // Show the image preview
            preview.style.display = 'block';
          };

          // Read the selected file as a data URL
          reader.readAsDataURL(input.files[0]);
        } else {
          // If no file is selected, hide the image preview
          preview.src = '';
          preview.style.display = 'none';
        }
      });
    });
  </script>
@endsection
