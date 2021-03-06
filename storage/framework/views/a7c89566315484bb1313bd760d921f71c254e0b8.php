<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php echo $__env->make("Investor.rcss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">

				<form action="/investorInfo" method="post">
                    <?php echo csrf_field(); ?>
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username"name="username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail" name="mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
					</div>

                        <button style="background-color: #c82333; width: 100px; height: 30px; font-size: 15px; color: white;"  type="submit">SAVE</button>

					<br>
					<div class="txt1 text-center p-t-54 p-b-20" style="text-align: center;">
						<span>
							<a href="investorlogin">
							 OR LOGIN
						    </a>
						</span>
					</div>
				</form>
				<img src="<?php echo e('assets/alluser/'); ?>registration/images/image-2.png" alt="" class="image-2">
			</div>

		</div>

		<?php echo $__env->make("Investor.rjs", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Investor/registration.blade.php ENDPATH**/ ?>