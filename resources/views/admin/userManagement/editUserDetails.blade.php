@extends('layouts.admin')

@section('content')
@if(session('message'))
@endif
<section class="section">
    <div class="row container">
        <div class="col-md-12">

                    <h3 class="title">Edit Users Details</h3>
                    <hr>
                <div class="row ">
                    <div class="col-md-12">
                        @foreach ($data as $item)
                        <form id="updateUserForm">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <div class="form-group">
                                <label class="control-label">Name <span style="color: #85CE36">*</span></label>
                                <input type="text" class="form-control boxed" name="name" value="{{$item->name}}" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email <span style="color: #85CE36">*</span></label>
                                <input type="email" class="form-control boxed" name="email" value="{{$item->email}}" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Role</label>

                                <select name="role" id="role" class="form-control boxed">
                                    @if ($item->role = "director")
                                    <option value="director">Director</option>
                                    <option value="cEngineer">Chemical Engineer</option>
                                    <option value="admin">Admin</option>
                                    @elseif ($item->role = "cEngineer")
                                    <option value="cEngineer">Chemical Engineer</option>
                                    <option value="director">Director</option>
                                    <option value="admin">Admin</option>
                                    @elseif ($item->role = "admin")
                                    <option value="admin">Admin</option>
                                    <option value="cEngineer">Chemical Engineer</option>
                                    <option value="director">Director</option>
                                    @else
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="cEngineer">Chemical Engineer</option>
                                    <option value="director">Director</option>
                                    @endif

                                </select>

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update User Details" style="width: 100%" >
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>

{{-- store data function --}}
<script>
    $(document).ready(function () {
        $('#updateUserForm').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'get',
                url: '/storeUpdatedUserDetailsAdmin', // Replace with your actual route URL
                data: formData,
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            title: 'Success',
                            text: response.success,
                            icon: 'success',
                        }).then(() => {
                                location.reload();
                            });
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred: ' + error,
                        icon: 'error',
                    });
                },
            });
        });
    });
</script>





@endsection
