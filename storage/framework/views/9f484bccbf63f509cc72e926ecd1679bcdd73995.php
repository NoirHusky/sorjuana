

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('3D Secure Verification')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-box-circle-check mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('user.plans')); ?>"> <?php echo e(__('Pricing Plans')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('3D Secure Verification')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-md-6">
			<div class="card border-0 pt-2">
				<div class="card-body">			
					<div class="text-center">						
						<h6 class="mt-2"><?php echo e(__('Complete')); ?> <span class="text-info font-weight-bold">3D Secure</span> Verification</h6>

						<p class="fs-12 mt-3"><?php echo e(__('Please follow your bank additional security steps to complete the order')); ?>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
		// Create a Stripe client.
		var stripe = Stripe('<?php echo e(config('services.stripe.api_key')); ?>');

		stripe.handleCardAction("<?php echo e($clientSecret); ?>")
			.then(function(result){
				if (result.error) {
					window.location.replace("<?php echo e(route('user.payments.cancelled')); ?>");
				} else {
					window.location.replace("<?php echo e(route('user.payments.approved')); ?>");
				}
			});
	</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sorjuana/resources/views/user/plans/3d-secure.blade.php ENDPATH**/ ?>