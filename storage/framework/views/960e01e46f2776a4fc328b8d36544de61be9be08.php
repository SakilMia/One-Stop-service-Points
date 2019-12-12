<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <title>ONE STOP SERVICE POINTS</title>

    <?php echo $__env->make("Admin.css", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <?php echo $__env->make("Admin.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
          <?php echo $__env->make("Admin.topbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- HEADER DESKTOP-->

            <!-- M9AIN CONTENT-->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->s
 <?php echo $__env->make("Admin.js", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<!-- end document-->
<?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Admin/master.blade.php ENDPATH**/ ?>