<div class="container mt-5 glass pt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="POST" action="<?php echo e(url('countries/' . $country->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-2">
                    <h1>Edit Country <?php echo e($country->id); ?></h1>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"
                           id="name"
                           name="name"
                           autocomplete="name"
                           placeholder="Type your name"
                           class="form-control
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e($country->name); ?>"
                           required
                           aria-describedby="nameHelp">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="person_id">People</label>
                    <select multiple name="person_id[]" id="person_id" class="form-control">
                        <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $isSelected = in_array($person->id, $country->people->pluck('id')->toArray());
                            ?>
                            <option
                                value="<?php echo e($person->id); ?>" <?php echo e($isSelected ? 'selected' : ''); ?>><?php echo e($person->first_name); ?>

                                , <?php echo e($person->last_name); ?>, <?php echo e($person->birth_date); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary mt-2 "
                                onclick="document.getElementById('person_id').selectedIndex = -1;">Clear Selection
                        </button>
                    </div>

                    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/components/countries/country-form-edit.blade.php ENDPATH**/ ?>