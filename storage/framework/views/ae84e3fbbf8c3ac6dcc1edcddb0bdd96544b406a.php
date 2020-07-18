<?php if(auth()->guard()->guest()): ?>
<div class="header-right">
			<a href="#" class="hr-btn">FAQ</a>
			<span>|</span>
			<div class="user-panel">
				<a href="/login" class="login">Login</a>
				<a href="/register" class="register">Create an account</a>
			</div>
        </div>
    <?php if(Route::has('register')): ?>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
        </li> -->
    <?php endif; ?>
<?php else: ?>
<div class="header-right">
    <div class="dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle user-Account  dropbtn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img src="/img/user-profile-img/<?php echo e(Auth::user()->user_image); ?>" class="profile--img" alt="logo">
             <span class=""><?php echo e(Auth::user()->name); ?></span>
        </a>

        <div class="dropdown-content">
          <a class="" href="/user/dashboard">Dashboard</a>
          <a class="" href="#">Settings</a>
            <a class="" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
</div>
</div>
</div>

<?php endif; ?>
<?php /**PATH C:\xampp2\htdocs\schoolapp\resources\views/inc/user_online.blade.php ENDPATH**/ ?>