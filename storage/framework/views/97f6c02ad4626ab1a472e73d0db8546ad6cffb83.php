<form action="<?php echo e(route('admin.referral.payouts.decline', $id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>
        
    <div class="modal-body">        
		<p><?php echo e(__('Do you want to decline this payout request')); ?>?</p>     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-cancel mr-2" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
        <button type="submit" class="btn btn-confirm"><?php echo e(__('Confirm')); ?></button>
    </div>
</form><?php /**PATH /var/www/html/sorjuana/resources/views/admin/finance/referrals/payouts/delete.blade.php ENDPATH**/ ?>