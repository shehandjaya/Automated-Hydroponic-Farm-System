@extends('layouts.admin')

@section('content')
@if(session('message'))
<script>
    swal({
        title: "New User has been Added!!",
        icon: "success",
        button: "Ok!",
    });
</script>
@endif
<section class="section">
    <div class="row container">
        <div class="col-md-12">
                <h3 class="title">Manage Users</h3>
                <hr>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Edit</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $user)
                                            @if ($user->id !== Auth::user()->id)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                @if($user->role == "admin")
                                                <td>Admin</td>
                                                @elseif ($user->role == "director")
                                                <td>Director</td>
                                                @elseif ($user->role == "cEngineer")
                                                <td>Chemical Engineer</td>
                                                @else
                                                <td>User</td>
                                                @endif
                                                <td><a href="/editUserDetailsAdmin/{{$user->id}}" class="btn btn-primary rounded-sm"> <i class="fa fa-pencil-square-o "></a></td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger delete-button rounded-sm" data-user-id="{{ $user->id }}">
                                                            <em class="fa fa-trash-o"></em>
                                                        </a>
                                                    </td>
                                            </tr>
                                            @endif
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
        const userId = $(this).data('user-id');
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
                alert(userId);
                $.ajax({
                    url: `/removeUserDetailsAdmin/${userId}`,
                    type: 'get',
                    success: function (response) {
                        if (response.message === 'User deleted successfully') {
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
</script>
@endsection
