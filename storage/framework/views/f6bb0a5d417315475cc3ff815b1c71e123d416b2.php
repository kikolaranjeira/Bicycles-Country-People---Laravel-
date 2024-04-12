<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.countries.country-list', ['countries' => $countries]); ?>
    <?php if (isset($__componentOriginal2fccc20c15534e4fd08fe2bc8ad4578069c2a3a6)): ?>
<?php $component = $__componentOriginal2fccc20c15534e4fd08fe2bc8ad4578069c2a3a6; ?>
<?php unset($__componentOriginal2fccc20c15534e4fd08fe2bc8ad4578069c2a3a6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/pages/countries/index.blade.php ENDPATH**/ ?>