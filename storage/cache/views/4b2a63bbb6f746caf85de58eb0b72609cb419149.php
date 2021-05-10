<?php $__env->startSection('content'); ?>
    <div style="padding: 15px;">
        <h2>
            Dashboard Page <?php echo e(env('NON_EXISTING_ENV_VALUE', 'Value Default To Me!!')); ?>

        </h2>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/izar-framework/resources/views/dashboard/home.blade.php ENDPATH**/ ?>