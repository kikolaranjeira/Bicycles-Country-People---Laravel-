<div class="container mt-5">
    <h1>Bicycles List</h1>

    <table class="table table-striped table-bordered ">
        <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Color</th>
            <th>Price</th>
            <th>Owner</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $bicycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bicycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($bicycle->id); ?></td>
                <td><?php echo e($bicycle->brand); ?></td>
                <td><?php echo e($bicycle->model); ?></td>
                <td><?php echo e($bicycle->color); ?></td>
                <td><?php echo e($bicycle->price); ?></td>
                <td>
                    <?php if($bicycle->person): ?>
                        <?php echo e($bicycle->person->first_name); ?> <?php echo e($bicycle->person->last_name); ?>

                    <?php endif; ?>
                </td>
                <td class="d-flex">
                    <div class="pr-1">
                        <a href="<?php echo e(url('bicycles/' . $bicycle->id)); ?>" type="button"
                           class="btn btn-success">Show</a>
                    </div>
                    <div class="pr-1">
                        <a href="<?php echo e(url('bicycles/' . $bicycle->id . '/edit')); ?>" type="button"
                           class="btn btn-primary">Edit</a>
                    </div>
                    <div>
                        <form action="<?php echo e(url('bicycles/' . $bicycle->id)); ?>" method="POST">
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
        <?php echo e($bicycles->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/components/bicycles/bicycle-list.blade.php ENDPATH**/ ?>