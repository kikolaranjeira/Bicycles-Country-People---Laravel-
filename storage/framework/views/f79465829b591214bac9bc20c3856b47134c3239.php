<div class="container mt-5 glass pt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="POST" action="<?php echo e(url('people')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <h1>Add Person</h1>
                    <hr>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input
                        type="file"
                        id="image"
                        name="image"
                        autocomplete="image"
                        class="form-control
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('image')); ?>"
                    >
                    <?php $__errorArgs = ['image'];
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
                    <label for="first_name">First Name</label>
                    <input type="text"
                           id="first_name"
                           name="first_name"
                           autocomplete="first_name"
                           placeholder="Type your first name"
                           class="form-control
                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('first_name')); ?>"
                           required
                           aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone
                        else.</small>
                    <?php $__errorArgs = ['first_name'];
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
                    <label for="last_name">Last Name</label>
                    <input type="text"
                           id="last_name"
                           name="last_name"
                           autocomplete="last_name"
                           placeholder="Type your last name"
                           class="form-control
                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('last_name')); ?>"
                           required
                           aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone
                        else.</small>
                    <?php $__errorArgs = ['last_name'];
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
                    <label for="birth_date">Birth Date</label>
                    <input type="date"
                           id="birth_date"
                           name="birth_date"
                           autocomplete="birth_date"
                           placeholder="Type your Birth Date"
                           class="form-control
                        <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('birth_date')); ?>"
                           required
                           aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone
                        else.</small>
                    <?php $__errorArgs = ['birth_date'];
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
                    <label for="country_id">Country</label>
                    <select name="country_id" id="country_id" class="form-control">
                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="bicycle_id">Bicycles</label>
                    <select multiple name="bicycle_id[]" id="bicycle_id" class="form-control">
                        <?php $__currentLoopData = $bicycles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bicycle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($bicycle->id); ?>"><?php echo e($bicycle->brand); ?>, <?php echo e($bicycle->model); ?>

                                , <?php echo e($bicycle->color); ?>, <?php echo e($bicycle->price); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary mt-2 "
                                onclick="document.getElementById('bicycle_id').selectedIndex = -1;">Clear Selection
                        </button>
                    </div>

                    <button type="submit" class="mt-4 mb-5 btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/components/people/person-form-create.blade.php ENDPATH**/ ?>