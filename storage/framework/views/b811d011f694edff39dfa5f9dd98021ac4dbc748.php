<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.countries.country-form-edit', ['country' => $country, 'people' => $people]); ?>
    <?php if (isset($__componentOriginal30c13a75cbe21ecb30298b6f9315824e708e41c6)): ?>
<?php $component = $__componentOriginal30c13a75cbe21ecb30298b6f9315824e708e41c6; ?>
<?php unset($__componentOriginal30c13a75cbe21ecb30298b6f9315824e708e41c6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/pages/countries/edit.blade.php ENDPATH**/ ?>