<?php $__env->startSection("content"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                          <div class="container">
                            <div class="login-wrap">
                                <div class="login-content">
                                    <div class="login-logo">
                                        <h2 class="title-1">ADD EMPLOYEE</h2>
                                    </div>
                                    <div class="login-form">
                                        <form action="/insert" method="post">
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
                                                <label>Password</label>
                                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                            </div>
                                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Admin.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Admin/addemployee.blade.php ENDPATH**/ ?>