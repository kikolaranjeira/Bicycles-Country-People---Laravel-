<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Players</title>

    
    <link href="<?php echo asset('css/app.css'); ?>" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <?php echo $__env->yieldContent('styles'); ?>
    

</head>
<body>

<?php $__env->startComponent('master.header'); ?>
<?php if (isset($__componentOriginal661375f12d1c5a73f2f163e0562459069f6d7e6e)): ?>
<?php $component = $__componentOriginal661375f12d1c5a73f2f163e0562459069f6d7e6e; ?>
<?php unset($__componentOriginal661375f12d1c5a73f2f163e0562459069f6d7e6e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<main>
    <div id="app">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</main>

<?php $__env->startComponent('master.footer'); ?>
<?php if (isset($__componentOriginald05ce9d8d01af187aa2403d4e02ae189359a481e)): ?>
<?php $component = $__componentOriginald05ce9d8d01af187aa2403d4e02ae189359a481e; ?>
<?php unset($__componentOriginald05ce9d8d01af187aa2403d4e02ae189359a481e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/master/main.blade.php ENDPATH**/ ?>