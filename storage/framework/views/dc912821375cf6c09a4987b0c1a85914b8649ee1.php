<div class="container mt-5">
    <h1>People List</h1>

    <table class="table table-striped table-bordered ">
        <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Country</th>
            <th>Bicycles</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($person->id); ?></td>
                <td>
                    <?php if($person->image): ?>
                        <img class="w-100 img-responsive" src="<?php echo e(asset('storage/'.$person->image)); ?>" alt="" title=""></a>
                    <?php else: ?>
                        <p>
                            No Image
                        </p>
                    <?php endif; ?>
                </td>
                <td><?php echo e($person->first_name); ?></td>
                <td><?php echo e($person->last_name); ?></td>
                <td><?php echo e($person->birth_date); ?></td>
                <td>
                    <?php if($person->country): ?>
                        <?php echo e($person->country->name); ?>

                    <?php endif; ?>
                </td>
                <td>
                    <?php $__currentLoopData = $person->bicycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bicycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($bicycle): ?>
                            <?php echo e($bicycle->brand); ?> <?php echo e($bicycle->model); ?>,
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td class="d-flex">
                    <div class="pr-1">
                        <a href="<?php echo e(url('people/' . $person->id)); ?>" type="button"
                           class="btn btn-success">Show</a>
                    </div>
                        <div class="pr-1">
                            <a href="<?php echo e(url('people/' . $person->id . '/edit')); ?>" type="button"
                               class="btn btn-primary">Edit</a>
                        </div>
                        <div>
                            <form action="<?php echo e(url('people/' . $person->id)); ?>" method="POST">
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
        <?php echo e($people->links()); ?>

    </div>
</div>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/components/people/person-list.blade.php ENDPATH**/ ?>