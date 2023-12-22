

<?php $__env->startSection('content'); ?>
<?php if(session('message')): ?>
<script>
    swal({
        title: "New User has been Added!!",
        icon: "success",
        button: "Ok!",
    });
</script>
<?php endif; ?>
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
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($user->id !== Auth::user()->id): ?>
                                            <tr>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <?php if($user->role == "admin"): ?>
                                                <td>Admin</td>
                                                <?php elseif($user->role == "director"): ?>
                                                <td>Director</td>
                                                <?php elseif($user->role == "cEngineer"): ?>
                                                <td>Chemical Engineer</td>
                                                <?php else: ?>
                                                <td>User</td>
                                                <?php endif; ?>
                                                <td><a href="/editUserDetailsAdmin/<?php echo e($user->id); ?>" class="btn btn-primary rounded-sm"> <i class="fa fa-pencil-square-o "></a></td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger delete-button rounded-sm" data-user-id="<?php echo e($user->id); ?>">
                                                            <em class="fa fa-trash-o"></em>
                                                        </a>
                                                    </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SHANAKA\Desktop\Final_Hydroponic_Farm\resources\views/admin/userManagement/manageUsersTbl.blade.php ENDPATH**/ ?>