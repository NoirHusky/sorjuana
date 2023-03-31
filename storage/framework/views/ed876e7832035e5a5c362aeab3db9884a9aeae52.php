

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('View Payout Request')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-badge-dollar mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.referral')); ?>"> <?php echo e(__('Affiliate Program')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.referral.payout')); ?>"> <?php echo e(__('Referral Payouts')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('View Payout Request')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<!-- SUPPORT REQUEST -->
	<div class="row">
		<div class="col-lg-5 col-md-5 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Payout Request')); ?> ID: <span class="text-info"><?php echo e($id->request_id); ?></h3>
				</div>
				<div class="card-body pt-5">									
							
						<div class="row">							
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Created Date')); ?>: </h6>
								<span class="fs-14"><?php echo e($id->created_at); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Status')); ?>: </h6>
								<span class="fs-14"><?php echo e(ucfirst($id->status)); ?></span>
							</div>							
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Last Updated')); ?>: </h6>
								<span class="fs-14"><?php echo e($id->updated_at); ?></span>
							</div>							
						</div>
						
						<div class="row mt-4">
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Payment Gateway')); ?>: </h6>
								<span class="fs-14"><?php echo e($id->gateway); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<h6 class="font-weight-bold mb-1"><?php echo e(__('Total Amount')); ?>: </h6>
								<span class="fs-14"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e($id->total); ?> <?php echo e(config('payment.default_system_currency')); ?></span>
							</div>							
						</div>		
						
						<div class="border-0 text-right mb-2 mt-8">
							<a href="<?php echo e(route('user.referral.payout')); ?>" class="btn btn-primary"><?php echo e(__('Return')); ?></a>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SUPPORT REQUEST -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sorjuana/resources/views/user/referrals/payouts/show.blade.php ENDPATH**/ ?>