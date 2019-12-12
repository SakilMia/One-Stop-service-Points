<?php $__env->startSection('content'); ?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Employee List</h2>
                                </div>
                            </div>
                        </div>
                         <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>Password</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $em; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo e($employee['username']); ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo e($employee['email']); ?></span>
                                                </td>
                                                <td class="desc"><?php echo e($employee['password']); ?></td>

                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="/editemployee/<?php echo e($employee['id']); ?>" class="btn btn-primary" >Edit</a>
                                                         <a href="/deleteemployee/<?php echo e($employee['id']); ?>" class="btn btn-danger" >Delete</a>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Admin.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Admin/employee.blade.php ENDPATH**/ ?>