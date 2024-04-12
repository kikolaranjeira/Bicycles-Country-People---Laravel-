<div class="container mt-5 glass pt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="GET" action="<?php echo e(url('players')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-2">
                    <h1> Show Country <?php echo e($country->id); ?></h1>
                </div>
                <div class="form-group mt-3">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" value="<?php echo e($country->name); ?>"  disabled>
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone
                        else.</small>
                </div>

                <div class="form-group">
                    <label for="person_id">People</label>
                    <select multiple disabled name="person_id[]" id="person_id" class="form-control">
                        <?php $__currentLoopData = $country->people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($person->id); ?>"><?php echo e($person->first_name); ?>, <?php echo e($person->last_name); ?>, <?php echo e($person->birth_date); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="/countries" type="button"
                       class="btn btn-primary mt-4 mb-5">Back</a>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/components/countries/country-form-show.blade.php ENDPATH**/ ?>