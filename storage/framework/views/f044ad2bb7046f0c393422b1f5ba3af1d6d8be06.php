<?php $__env->startSection("content"); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                         <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Ministry List</h2>
                                </div>
                            </div>
                        </div>
                         <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $mi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ministry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo e($ministry['username']); ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo e($ministry['email']); ?></span>
                                                </td>
                                                <td class="desc"><?php echo e($ministry['password']); ?></td>

                                                <td>

                                                        <a href="/editministry/<?php echo e($ministry['id']); ?>" class="btn btn-primary" >Edit</a>
                                                         <a href="/deleteministry/<?php echo e($ministry['id']); ?>" class="btn btn-danger" >Delete</a>

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

<?php echo $__env->make("Admin.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Admin/ministry.blade.php ENDPATH**/ ?>