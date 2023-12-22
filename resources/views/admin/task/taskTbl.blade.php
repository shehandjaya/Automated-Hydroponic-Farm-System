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

<style>
/* //table styles */
/* Style for the table */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

/* Style for table headers */
.table th {
    background-color: #f2f2f2;
    text-align: left;
    padding: 10px;
}

/* Style for table rows */
.table td {
    padding: 10px;
}

/* Style for buttons in the table */
.table .btn {
    margin-right: 5px;
}

/* Style for modal */
.modal-content {
    border-radius: 0;
}

.modal-header {
    background-color: #007bff;
    color: #fff;
}

.modal-footer {
    background-color: #f2f2f2;
}

/* Style for the Add Task button */
#addTaskButton {
    margin-bottom: 20px;
}

/* Style for the title */
.title {
    color: #007bff;
}

/* Style for the hr element */
hr {
    border-color: #007bff;
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="section">
    <div class="row container">
        <div class="col-md-12">
                <h3 class="title">Task Manager</h3>
                <hr>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="addTaskButton">
    Add Task
  </button>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Task</th>

                                                <th>Edit</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $task)

                                            <tr>
                                                <td>{{$task->task}}</td>

                                                <td>

                                                    @if ($task->status == 1)
                                                    <button class="btn btn-danger manc-button rounded-sm" style="width: 200px" data-item-id="{{ $task->id }}" ><i class="fa fa-times" aria-hidden="true"></i> Mark As Not Complete </button></td>
                                                    @else
                                                    <button class="btn btn-primary mad-button rounded-sm"  style="width: 200px"  data-item-id="{{ $task->id }}" ><i class="fa fa-check" aria-hidden="true"></i> Mark As Done</button></td>
                                                    @endif


                                                    <td>

                                                        <a href="#" class="btn btn-danger delete-button rounded-sm"
                                                        data-item-id="{{ $task->id }}">
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



  <!-- Modal -->
  <div class="modal fade"id="addItemsModel"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  method="POST" id="addTaskForm">
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" id="task" name="task" required>
            </div>

        </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
    </form>
      </div>
    </div>
  </div>



</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // crf token
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
// add task
$('#addTaskButton').on('click', function (event) {
    $('#addItemsModel').modal('show');
});
        $('#addTaskForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: `/add-task`,
                type: 'post',
                data: $('#addTaskForm').serialize(),
                success: function (response) {
                    if (response.message === 'Task Added successfully') {
                        Swal.fire(
                            'Added!',
                            'The Task has been Added.',
                            'success'
                        ).then(() => {
                            $('#editItemModal').modal('hide');
                            location.reload();
                        });
                    }
                },
                error: function () {
                    Swal.fire(
                        'Error!',
                        'An error occurred while updating the item.',
                        'error'
                    );
                }
            });
        });
// delete task
        $(document).ready(function () {
            $('.delete-button').on('click', function (event) {
                event.preventDefault();
                const itemId = $(this).data('item-id');
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

                        $.ajax({
                            url: `/removeTaskAdmin/${itemId}`,
                            type: 'get',
                            success: function (response) {
                                if (response.message === 'Task deleted successfully') {
                                    Swal.fire(
                                        'Deleted!',
                                        'The Item has been deleted.',
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


//mark as done
        $(document).ready(function () {
            $('.mad-button').on('click', function (event) {

                event.preventDefault();
                const itemId = $(this).data('item-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Mark As Done!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#72B22B',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: `/madTask/${itemId}`,
                            type: 'get',
                            success: function (response) {
                                if (response.message === 'Task Status Changed successfully') {
                                    Swal.fire(
                                        'Deleted!',
                                        'The Task Done.',
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

//mark as not complete



$(document).ready(function () {
            $('.manc-button').on('click', function (event) {

                event.preventDefault();
                const itemId = $(this).data('item-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Mark As Not Complete?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#72B22B',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            url: `/mancTask/${itemId}`,
                            type: 'get',
                            success: function (response) {
                                if (response.message === 'Task Status Changed successfully') {
                                    Swal.fire(
                                        'Deleted!',
                                        'The Task Mark As Not Completed.',
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
