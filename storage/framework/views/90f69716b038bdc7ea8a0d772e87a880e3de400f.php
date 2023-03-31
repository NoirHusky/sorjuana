<?php $__env->startComponent('mail::message'); ?>
# Introduction

The body of your message.

<?php $__env->startComponent('mail::button', ['url' => <?php echo e(config('app.url')); ?>]); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/sorjuana/resources/views/emails/support.blade.php ENDPATH**/ ?>