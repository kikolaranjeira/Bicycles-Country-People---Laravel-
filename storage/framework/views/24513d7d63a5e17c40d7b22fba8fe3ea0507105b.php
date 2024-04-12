<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.people.person-form-create', ['countries' => $countries, 'bicycles' => $bicycles]); ?>
    <?php if (isset($__componentOriginalcddd41bfe7ad029a404d909641074d2031972e3e)): ?>
<?php $component = $__componentOriginalcddd41bfe7ad029a404d909641074d2031972e3e; ?>
<?php unset($__componentOriginalcddd41bfe7ad029a404d909641074d2031972e3e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/pages/people/create.blade.php ENDPATH**/ ?>