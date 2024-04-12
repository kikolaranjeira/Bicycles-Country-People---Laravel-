<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.people.person-list', ['people' => $people]); ?>
    <?php if (isset($__componentOriginaldc79daf57ed9f9425d7380f7db09780d8ac06f07)): ?>
<?php $component = $__componentOriginaldc79daf57ed9f9425d7380f7db09780d8ac06f07; ?>
<?php unset($__componentOriginaldc79daf57ed9f9425d7380f7db09780d8ac06f07); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/pages/people/index.blade.php ENDPATH**/ ?>