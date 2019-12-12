<?php $__env->startSection("content"); ?>
    <div class="page-content" style="background-image: url('<?php echo e('assets/alluser/'); ?>applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <form class="form-register" id="form-register" action="#" method="">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="au-input au-input--full" type="text" name="phoneNumber" placeholder="phoneNumber">
                    </div>
                    <button style="background-color: #c82333; width: 100px; height: 30px; font-size: 15px; color: white;"  type="submit">UPDATE</button>
                </form>
                <br>
                <a href="/ministrylogout" style="background-color: #c82333; width: 120px; height: 30px; font-size: 15px; color: white;">LogOut</a>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Ministry.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Ministry/profile.blade.php ENDPATH**/ ?>