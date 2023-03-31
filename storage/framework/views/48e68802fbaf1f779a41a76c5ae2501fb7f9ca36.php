

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">Razorpay Checkout</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-box-circle-check mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('user.plans')); ?>"> <?php echo e(__('Pricing Plans')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Razorpay Checkout')); ?></a></li>
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
						<h6 class="mt-2"><span class="font-weight-bold">Razorpay</span></h6>
						<p class="fs-12 mt-3"><?php echo e(__('Click Pay Now button to complete the payment process via Razorpay Payment')); ?>.</p>
						<p class="fs-12 mt-3"><?php echo e(__('Plan name: ')); ?> <span class="font-weight-bold"><?php echo e($id->plan_name); ?></span>.</p>
						<button type="button" id="razorpay" class="btn btn-primary mb-4 mt-2"><?php echo e(__('Pay Now')); ?></button>		
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
	<script>

		var entity = "<?php echo e($order->entity); ?>";

		if ( entity == 'order') {
			var options = {
				"key": "<?php echo e(config('services.razorpay.key_id')); ?>", // Enter the Key ID generated from the Dashboard
				"amount": "<?php echo e($amount); ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
				"currency": "<?php echo e($currency); ?>",
				"name": "<?php echo e(config('app.name')); ?>",
				"description": "Subscription Plan",
				"image": "<?php echo e(URL::asset('img/brand/favicon.png')); ?>",
				"order_id": "<?php echo e($order->id); ?>", 
				"callback_url": "<?php echo e(route('user.payments.approved.razorpay')); ?>",
				"prefill": {
					"name": "<?php echo e($name); ?>",
					"email": "<?php echo e($email); ?>",
				},
			};
		} else {
			var options = {
				"key": "<?php echo e(config('services.razorpay.key_id')); ?>", // Enter the Key ID generated from the Dashboard
				"subscription_id": "<?php echo e($order->id); ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
				"name": "<?php echo e(config('app.name')); ?>",
				"description": "Subscription Plan",
				"image": "<?php echo e(URL::asset('img/brand/favicon.png')); ?>",
				"callback_url": "<?php echo e(route('user.payments.subscription.razorpay', ['plan_id' => $id->id])); ?>",
				"prefill": {
					"name": "<?php echo e($name); ?>",
					"email": "<?php echo e($email); ?>",
				},
			};
		}
		
		var rzp = new Razorpay(options);
		document.getElementById('razorpay').onclick = function(e){
			rzp.open();
			e.preventDefault();
		}
	</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sorjuana/resources/views/user/plans/razorpay-checkout.blade.php ENDPATH**/ ?>