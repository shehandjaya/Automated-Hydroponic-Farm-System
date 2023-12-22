

<?php $__env->startSection('content'); ?>
<style>
    img{
        height: 200px;
        width: 200px;
        border-radius: 50%;
        object-fit: cover;
        background: #dfdfdf;
    }

</style>
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
            <div class="card card-block sameheight-item">
                    <h3 class="title">Add New Users</h3>
                    <hr>
                <div class="row ">
                    <div class="col-md-12">
                        <form action="/storeNewUserAdmin" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label">Name <span style="color: #85CE36">*</span></label>

                                <input type="text" class="form-control boxed" name="name"  placeholder="Enter Your Name........" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email <span style="color: #85CE36">*</span></label>
                                <input type="email" class="form-control boxed" name="email" placeholder="Enter Your Email........" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Role</label>
                                <select name="role" id="role" class="form-control boxed">
                                    <option value="director">Director</option>
                                    <option value="cEngineer">Chemical Engineer</option>
                                    <option value="admin">Admin</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Add User" style="width: 100%" >
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#addUserForm').submit(function (e) {
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\Final_Hydroponic_Farm\resources\views/admin/userManagement/addUser.blade.php ENDPATH**/ ?>