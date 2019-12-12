<?php $__env->startSection("content"); ?>
    <div class="page-content" style="background-image: url('<?php echo e('assets/alluser/'); ?>applyform/images/wizard-v1.jpg'); height: 700px;">
        <div class="wizard-v1-content">
            <div class="wizard-form">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th scope="col">Project Name</th>
                        <th scope="col">Cost</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $em; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $costinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($costinfo['projectName']); ?></td>
                            <td><?php echo e($costinfo['Cost']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("Investor.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Investor/costestimate.blade.php ENDPATH**/ ?>