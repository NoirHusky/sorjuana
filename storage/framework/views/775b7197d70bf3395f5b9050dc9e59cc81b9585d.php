

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('New Subscription Plan')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-sack-dollar mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.dashboard')); ?>"> <?php echo e(__('Finance Management')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.plans')); ?>"> <?php echo e(__('Subscription Plans')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('New Subscription Plan')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-8 col-md-8 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Create New Subscription Plan')); ?></h3>
				</div>
				<div class="card-body pt-5">									
					<form action="<?php echo e(route('admin.finance.plan.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">						
								<div class="input-box">	
									<h6><?php echo e(__('Plan Status')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="plan-status" name="plan-status" data-placeholder="<?php echo e(__('Select Plan Status')); ?>:">			
										<option value="active" selected><?php echo e(__('Active')); ?></option>
										<option value="closed"><?php echo e(__('Closed')); ?></option>
									</select>
									<?php $__errorArgs = ['plan-status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('plan-status')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>						
							</div>							
							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Plan Name')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="plan-name" name="plan-name" value="<?php echo e(old('plan-name')); ?>" required>
									</div> 
									<?php $__errorArgs = ['plan-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('plan-name')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Price')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="cost" name="cost" value="<?php echo e(old('cost')); ?>" required>
									</div> 
									<?php $__errorArgs = ['cost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('cost')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Currency')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="currency" name="currency" data-placeholder="<?php echo e(__('Select Currency')); ?>:">			
										<?php $__currentLoopData = config('currencies.all'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($key); ?>" <?php if(config('payment.default_system_currency') == $key): ?> selected <?php endif; ?>><?php echo e($value['name']); ?> - <?php echo e($key); ?> (<?php echo e($value['symbol']); ?>)</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('currency')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Payment Frequence')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="frequency" name="frequency" data-placeholder="<?php echo e(__('Select Payment Frequency')); ?>:">		
										<option value="monthly" selected><?php echo e(__('Monthly')); ?></option>
										<option value="yearly"><?php echo e(__('Yearly')); ?></option>
									</select>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Featured Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="featured" name="featured" data-placeholder="<?php echo e(__('Select if Plan is Featured')); ?>:">		
										<option value=1><?php echo e(__('Yes')); ?></option>
										<option value=0 selected><?php echo e(__('No')); ?></option>
									</select>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Free Plan')); ?></h6>
									<div class="form-group">							    
										<select id="free-plan" name="free-plan" data-placeholder="<?php echo e(__('Make this plan a Free Plan?')); ?>:">			
											<option value=1><?php echo e(('Yes')); ?></option>
											<option value=0 selected><?php echo e(('No')); ?></option>
										</select>
									</div> 
									<?php $__errorArgs = ['free-plan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('free-plan')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>
						</div>

						<div class="card special-shadow border-0" id="payment-gateways">
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-5"><i class="fa fa-bank text-info fs-14 mr-1 fw-2"></i><?php echo e(__('Payment Gateways Plan IDs')); ?></h6>

								<div class="row">								
									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('PayPal Plan ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Paypal')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Paypal Plan ID in your Paypal account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="paypal_gateway_plan_id" name="paypal_gateway_plan_id" value="<?php echo e(old('paypal_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['paypal_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('paypal_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Stripe Product ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Stripe')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Stripe Product ID in your Stripe account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="stripe_gateway_plan_id" name="stripe_gateway_plan_id" value="<?php echo e(old('stripe_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['stripe_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('stripe_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Paystack Plan Code')); ?> <span class="text-danger">(<?php echo e(__('Required for Paystack')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Paystack Plan ID in your Paystack account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="paystack_gateway_plan_id" name="paystack_gateway_plan_id" value="<?php echo e(old('paystack_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['paystack_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('paystack_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Razorpay Plan ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Razorpay')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Razorpay Plan ID in your Razorpay account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="razorpay_gateway_plan_id" name="razorpay_gateway_plan_id" value="<?php echo e(old('razorpay_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['razorpay_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('razorpay_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>
								</div>
							</div>						
						</div>

						<div class="card mt-6 mb-7 special-shadow border-0">
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-5"><i class="fa-solid fa-box-circle-check text-info fs-14 mr-1 fw-2"></i><?php echo e(__('Included Features')); ?></h6>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Total Words included in Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="words" name="words" value="<?php echo e(old('words')); ?>" required>
												<span class="text-muted fs-10"><?php echo e(__('Each text generation task will count total input by user and output words by openai')); ?></span>
											</div> 
											<?php $__errorArgs = ['words'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('words')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Total Images included in Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="images" name="images" value="<?php echo e(old('images')); ?>" required>
												<span class="text-muted fs-10"><?php echo e(__('Valid for all image sizes')); ?></span>
											</div> 
											<?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('images')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('OpenAI Model for All Text Results')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="default-model-user" name="model" data-placeholder="<?php echo e(__('Select OpenAI Model Type')); ?>:">			
												<option value="text-ada-001" selected><?php echo e(__('Ada')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="text-babbage-001"><?php echo e(__('Babbage')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="text-curie-001"><?php echo e(__('Curie')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="text-davinci-003"><?php echo e(__('Davinci')); ?> (<?php echo e(__('GPT 3')); ?>)</option>
												<option value="gpt-3.5-turbo"><?php echo e(__('ChatGPT')); ?> (<?php echo e(__('3.5 Turbo')); ?>)</option>
												<option value="gpt-4"><?php echo e(__('GPT 4')); ?> (<?php echo e(__('8K')); ?>)</option>
												<option value="gpt-4-32k"><?php echo e(__('GPT 4')); ?> (<?php echo e(__('32K')); ?>)</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Max Allowed Words Limit for All Text Results')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('OpenAI will treat this limit as a stop marker. i.e. If you set it to 500, openai will try to stop as it will create a text with 500 tokens, but it can also ignore it on some cases')); ?>."></i></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="tokens" name="tokens" value="<?php echo e(old('tokens')); ?>" required>
											</div> 
											<?php $__errorArgs = ['tokens'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('words')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Image Creation')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="image-feature" name="image-feature" data-placeholder="<?php echo e(__('Set AI Image Creation Permission')); ?>">
												<option value=1 selected><?php echo e(__('Allow')); ?></option>
												<option value=0> <?php echo e(__('Deny')); ?></option>																															
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Templates Access')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="templates" name="templates" data-placeholder="<?php echo e(__('Set Templates Access')); ?>">
												<option value="all" selected><?php echo e(__('All Templates')); ?></option>
												<option value="professional"> <?php echo e(__('Only Professional Templates')); ?></option>																															
												<option value="standard"> <?php echo e(__('Only Standard Templates')); ?></option>																																																													
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-12">
								<div class="input-box">	
									<h6><?php echo e(__('Primary Heading')); ?> <span class="text-muted">(<?php echo e(__('Optional')); ?>)</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="primary-heading" name="primary-heading" value="<?php echo e(old('primary-heading')); ?>">
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6><?php echo e(__('Plan Features')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-danger ml-3">(<?php echo e(__('Comma Seperated')); ?>)</span></h6>							
									<textarea class="form-control" name="features" rows="10"><?php echo e(old('features')); ?></textarea>
									<?php $__errorArgs = ['features'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('features')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>											
							</div>
						</div>
						

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="<?php echo e(route('admin.finance.plans')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Cancel')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button>							
						</div>				

					</form>					
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sorjuana/resources/views/admin/finance/plans/create.blade.php ENDPATH**/ ?>