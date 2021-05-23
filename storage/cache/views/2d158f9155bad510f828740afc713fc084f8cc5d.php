<?php $__env->startSection('content'); ?>
    <div style="padding: 15px;">
        <h2>
            Home Page <?php echo e(env('APP_NAME', 'Izar-framework')); ?>

        </h2>
        <p>Name <?php echo e($user->first_name); ?></p>
        <p>Email <?php echo e($user->email); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/izar-framework/resources/views/home.blade.php ENDPATH**/ ?>