<?php $__env->startSection("content"); ?>
    <div class="page-content" style="background-image: url('<?php echo e('assets/alluser/'); ?>applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($info['textilesMinistryFileStatus'] == 'pickedtom' && $info['environmentMinistryFileStatus'] == 'picked' && $info['foreignMinistryFileStatus'] == 'picked' && $info['planningMinistryFileStatus'] == 'picked'): ?>
                            <tr>
                                <td><?php echo e($info['username']); ?></td>
                                <td>PENDING</td>
                                <td> <a href="/sendapproval/<?php echo e($info['id']); ?>" style="background-color: #34eb65; width: 120px; height: 30px; font-size: 15px; color: white;">Send Approval</a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Employee.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Employee/pickedproject.blade.php ENDPATH**/ ?>