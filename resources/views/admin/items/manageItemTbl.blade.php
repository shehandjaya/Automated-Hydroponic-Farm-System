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
            <h3 class="title">Manage Items</h3>
            <hr>
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <table class="table table-striped" id="itemTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $Item)

                                <tr>
                                    <td>{{$Item->name}}</td>
                                    <td><img src="{{asset($Item->image)}}" alt="" srcset=""
                                            style="width: 10%;height:10%"></td>
                                    <td>{{$Item->price}}</td>

                                    <td>
                                        <a href="#" class="btn btn-primary edit-button rounded-sm"
                                            data-item-id="{{ $Item->id }}">   <i class="fa fa-eye"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger delete-button rounded-sm"
                                            data-item-id="{{ $Item->id }}">
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
<!-- Edit Modal -->
<div class="modal fade" id="editItemModal" tabindex="-1" role="dialog" aria-labelledby="editItemModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editItemModalLabelH5"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="editItemForm" enctype="multipart/form-data">
                    <div class="form-group">

                        <img src="" alt="" class="form-control" id="itemImagePreview"
                            style="width: 50%; height: 50%;display: block; margin: 0 auto;">
                    </div>
                    <div class="form-group">
                        <label for="itemName">Item Name</label>
                        <input type="text" class="form-control" id="itemName" name="itemName" required>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Item Description</label>
                        <textarea name="itemDescription" id="itemDescription" required class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="itemPrice">Item Price</label>
                        <input type="number" class="form-control" id="itemPrice" name="itemPrice" required>
                    </div>

                    <div class="form-group">
                        <label for="itemDiscount">Item Discount</label>
                        <input type="number" class="form-control" id="itemDiscount" name="itemDiscount" required>
                    </div>

                    <div class="form-group">
                        <label for="itemImage">Item Image</label>
                        <input type="file" class="form-control" id="itemImage" name="itemImage">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- delete button script --}}

<script>
    jQuery(document).ready(function ($) {
        $('#itemTable').DataTable();
    });

    $(document).ready(function () {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        let itemId;
        $('.edit-button').on('click', function (event) {
            event.preventDefault();
            itemId = $(this).data('item-id');
            $.ajax({
                url: `/getItemDetails/${itemId}`,
                type: 'get',
                success: function (response) {
                    $('#editItemModalLabelH5').text(response.name);
                    $('#itemName').val(response.name);
                    $('#itemPrice').val(response.price);
                    $('#itemDescription').val(response.description);
                    $('#itemDiscount').val(response.discount);
                    $('#itemImagePreview').attr('src', response.image);
                    $('#editItemModal').modal('show');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                         console.log('Response:', jqXHR.responseText);
                    Swal.fire(
                        'Error!',
                        'An error occurred while fetching item details.',
                        'error'
                    );
                }
            });
        });

        $('#editItemForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: `/updateItemDetails/${itemId}`,
                type: 'post',
                data: $('#editItemForm').serialize(),
                success: function (response) {
                    if (response.message === 'Item updated successfully') {
                        Swal.fire(
                            'Updated!',
                            'The Item has been updated.',
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
                            url: `/removeItemDetailsAdmin/${itemId}`,
                            type: 'get',
                            success: function (response) {
                                if (response.message === 'Item deleted successfully') {
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
    });

    // Add image preview functionality when a file is selected
    $('#itemImage').on('change', function (event) {
        const input = event.target;
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                // Set the preview image source
                $('#itemImagePreview').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
