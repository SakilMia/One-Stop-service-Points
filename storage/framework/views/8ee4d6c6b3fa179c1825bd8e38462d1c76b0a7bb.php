<?php $__env->startSection("content"); ?>
    <div class="page-content" style="background-image: url('<?php echo e('assets/alluser/'); ?>applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Project Id</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Status</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($info['textilesMinistryFileStatus'] == 'processingtom' && $info['environmentMinistryFileStatus'] == 'processingtoe' && $info['foreignMinistryFileStatus'] == 'processingtof' && $info['planningMinistryFileStatus'] == 'processingtop'): ?>
                            <tr>
                                <td><?php echo e($info['id']); ?></td>
                                <td><?php echo e($info['username']); ?></td>
                                <td>PROCESSING</td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Employee.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Employee/pendingproject.blade.php ENDPATH**/ ?>