<div class="container mt-5">
    <h1>Countries List</h1>

    <table class="table table-striped table-bordered ">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>People</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($country->id); ?></td>
                <td><?php echo e($country->name); ?></td>
                <td>
                    <?php $__currentLoopData = $country->people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($person): ?>
                            <?php echo e($person->first_name); ?> <?php echo e($person->last_name); ?>,
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </td>
                <td class="d-flex">
                    <div class="pr-1">
                        <a href="<?php echo e(url('countries/' . $country->id)); ?>" type="button"
                           class="btn btn-success">Show</a>
                    </div>
                    <div class="pr-1">
                        <a href="<?php echo e(url('countries/' . $country->id . '/edit')); ?>" type="button"
                           class="btn btn-primary">Edit</a>
                    </div>
                    <div>
                        <form action="<?php echo e(url('countries/' . $country->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4 mb-3 pages">
        <?php echo e($countries->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/components/countries/country-list.blade.php ENDPATH**/ ?>