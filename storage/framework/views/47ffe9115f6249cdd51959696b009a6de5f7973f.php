<nav class="navbar navbar-expand-lg navbar-light gradient" style="">
    <a class="navbar-brand">BIKES</a>
    <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/bicycles">Bicycles List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bicycles/create">Add Bicycle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/people">People List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/people/create">Add Person</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/countries">Countries List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/countries/create">Add Country</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
            <?php if(Route::has('register')): ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            </li>
            <?php endif; ?>
            <?php else: ?>
            <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
            </form>
            </div>
            </li>
            <?php endif; ?>


        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\Laranjeira\Desktop\Bicycles-Laravel-main\resources\views/master/header.blade.php ENDPATH**/ ?>