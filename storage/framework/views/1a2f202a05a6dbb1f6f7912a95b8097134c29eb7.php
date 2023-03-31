<form action="<?php echo e(route('user.payments.subscription.stop', $id)); ?>" method="GET" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
        
    <div class="modal-body">        
		<p><?php echo e(__('Are you sure you want to cancel your subscription')); ?>?</p>     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-cancel mr-2" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
        <button type="submit" class="btn btn-confirm"><?php echo e(__('Confirm')); ?></button>
    </div>
</form><?php /**PATH /var/www/html/sorjuana/resources/views/user/plans/cancel.blade.php ENDPATH**/ ?>