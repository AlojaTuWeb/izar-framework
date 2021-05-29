<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(env('APP_NAME', 'Izar-framework')); ?></title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
        <div id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <script src="/js/main.js"></script>
</body>
</html><?php /**PATH /opt/lampp/htdocs/izar-framework/resources/views/layouts/app.blade.php ENDPATH**/ ?>