<?php $__env->startSection('content'); ?>
    <div class="bt-white shadow-md hover:shadow-xl rounded-lg border-2 w-1/2 p-4 mt-40 ml-80">
        <h1 class="flex justify-center text-6xl text-gray-800 font-semibold">
            <?php echo e(env('APP_NAME')); ?>

        </h1>
        <h2 class="2xl flex justify-center">
            Izar-framework is other PHP framework MVC based in Slim framework.
        </h2>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/izar-framework/resources/views/home.blade.php ENDPATH**/ ?>