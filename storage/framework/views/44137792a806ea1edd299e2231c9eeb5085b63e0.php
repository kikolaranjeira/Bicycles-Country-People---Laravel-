<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.bicycles.bicycle-list', ['bicycles' => $bicycles]); ?>
    <?php if (isset($__componentOriginal2bfb10fedb8a59d78a885fb659ea48ab583a46d5)): ?>
<?php $component = $__componentOriginal2bfb10fedb8a59d78a885fb659ea48ab583a46d5; ?>
<?php unset($__componentOriginal2bfb10fedb8a59d78a885fb659ea48ab583a46d5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/pages/bicycles/index.blade.php ENDPATH**/ ?>