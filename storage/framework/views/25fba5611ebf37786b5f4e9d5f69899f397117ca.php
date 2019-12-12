<?php $__env->startSection("content"); ?>

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="overview-wrap">
                            <h2 class="title-1">Project Cost List</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="overview-wrap">
                            <a href="/addcostestimate" class="btn btn-primary" >Add Cost Estimate</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">

                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Cost</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $em; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $costinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="tr-shadow">
                                <td><?php echo e($costinfo['projectName']); ?></td>
                                <td><?php echo e($costinfo['Cost']); ?></td>
                                <td>

                                    <a href="/editcostestimate/<?php echo e($costinfo['id']); ?>" class="btn btn-primary" >Edit</a>


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

<?php echo $__env->make("Admin.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Admin/costestimate.blade.php ENDPATH**/ ?>