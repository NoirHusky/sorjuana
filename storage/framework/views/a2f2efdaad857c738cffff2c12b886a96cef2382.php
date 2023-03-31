

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('View Request')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-sack-dollar mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.dashboard')); ?>"> <?php echo e(__('Finance Management')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.referral.payouts')); ?>"> <?php echo e(__('Referral Payouts')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('View Request')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Request')); ?> ID: <span class="text-info"><?php echo e($id->request_id); ?></span></h3>
				</div>
				<div class="card-body pt-5">	
					
					<form action="<?php echo e(route('admin.referral.payouts.update', $id)); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<?php echo method_field('PUT'); ?>

						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Request Date')); ?>: </h6>
								<span class="fs-14"><?php echo e($id->created_at); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('User Email')); ?>: </h6>
								<span class="fs-14"><?php echo e($user->email); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Request Amount')); ?> (<?php echo e(config('payment.default_system_currency')); ?>): </h6>
								<span class="fs-14"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e($id->total); ?></span>
							</div>
						</div>

						<div class="row pt-5">
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Preferred Payment Gateway')); ?>: </h6>
								<span class="fs-14"><?php echo e($id->gateway); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('PayPal ID')); ?>: </h6>
								<span class="fs-14"><?php echo e($user->referral_paypal); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Bank Requisites')); ?>: </h6>
								<span class="fs-14"><?php echo e($user->referral_bank_requisites); ?></span>
							</div>
						</div>	

						<div class="row pt-7">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h6 class="font-weight-bold mb-3"><?php echo e(__('Payout Status')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></h6>						
								<div class="input-box">										
									<select id="notification-action" name="status" data-placeholder="<?php echo e(__('Select Payment Request Status')); ?>:">			
										<option value="processing" <?php if($id->status == 'processing'): ?> selected <?php endif; ?>><?php echo e(__('Processing')); ?></option>
										<option value="completed" <?php if($id->status == 'completed'): ?> selected <?php endif; ?>><?php echo e(__('Completed')); ?></option>
										<option value="declined" <?php if($id->status == 'declined'): ?> selected <?php endif; ?>><?php echo e(__('Declined')); ?></option>
										<option value="cancelled" <?php if($id->status == 'cancelled'): ?> selected <?php endif; ?>><?php echo e(__('Cancelled')); ?></option>
									</select>
									<?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('status')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>						
							</div>
						</div>
						
						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-7">
							<a href="<?php echo e(route('admin.referral.payouts')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Return')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>	
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sorjuana/resources/views/admin/finance/referrals/payouts/show.blade.php ENDPATH**/ ?>