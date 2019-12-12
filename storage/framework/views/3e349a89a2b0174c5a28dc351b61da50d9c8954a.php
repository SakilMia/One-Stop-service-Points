<?php $__env->startSection("content"); ?>
<div class="page-content" style="background-image: url('<?php echo e('assets/alluser/'); ?>applyform/images/wizard-v1.jpg')">
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 1</span>
			            	<span class="step-text">Company Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="username">Company Name*</label>
										<input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="email">Email Address*</label>
										<input type="email" placeholder="Your Email" class="form-control" id="email" name="email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label for="text">Phone Number*</label>
										<input type="text" placeholder="Phone Number" class="form-control" id="phoneNumber" name="phoneNumber" required >
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Ministry of Textiles and Jute</span>
			            </h2>
			            <section>
			                <div class="form-row">
                            <div class="name">Upload Documents</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 3</span>
			            	<span class="step-text">Ministry of Environment and Forest</span>
			            </h2>
			            <section>
			                 <div class="form-row">
                            <div class="name">Upload Documents</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 4</span>
			            	<span class="step-text">Ministry of Foreign Affairs</span>
			            </h2>
			            <section>
			                 <div class="form-row">
                            <div class="name">Upload Documents</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
			            </section>
			            <!-- SECTION 5 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 5</span>
			            	<span class="step-text">Ministry of Planning</span>
			            </h2>
			            <section>
			                 <div class="form-row">
                            <div class="name">Upload Documents</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="">Upload your Company Documet or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
			            </section>
			            <!-- SECTION 6 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-number">Step 3</span>
			            	<span class="step-text">Confirm Your Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Comfirm Details</h3>
								<div class="form-row table-responsive">
									<table class="table">
										<tr>
											<td>Ministry of Textiles and Jute</td>
										</tr>
										<tr>
											<td>Company Infomation</td>
										</tr>
										<tr>
											<td>Ministry of Environment and Forest</td>
										</tr>
										<tr>
											<td>Ministry of Foreign Affairs</td>
										</tr>
										<tr>
											<td>Ministry of Planning</td>
										</tr>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("Investor.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\One_Stop_Service_Points\resources\views/Investor/Food_Beverage.blade.php ENDPATH**/ ?>