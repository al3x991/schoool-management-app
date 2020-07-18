
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OCreer | Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    ​<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100" style="width: 800px;">
        <!-- <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="alert alert-danger" style="z-index:99;">
            <?php echo e($error); ?>

          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?> -->
				<form method="POST" enctype="multipart/form-data" action="<?php echo e(route('register')); ?>" class="login100-form validate-form">
            <?php echo csrf_field(); ?>
						<div class="container">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' class="focus-input100" name="image_file" id="imageUpload" accept=".png, .jpg, .jpeg" required="required"/>
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(img/default-user.png);">
            </div>
        </div>
    </div>
</div>

					<span class="login100-form-title p-b-34 p-t-27">
						Create An Account
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
					<input class="input100" type="text" name="name" placeholder="Full Name" required="required">
					<?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
							<span class="invalid-feedback" role="alert">
									<strong><?php echo e($message); ?></strong>
							</span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

				</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email" required="required">
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required="required">
            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

					</div>
					<div class="wrap-input100 validate-input m-b-16">
	<input id="password-confirm" placeholder="Confirm Password"  type="password" class="input100" name="password_confirmation" required="required">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div class="row">


					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							    <?php echo e(__('Register')); ?>

						</button>

					</div>

          <div class="container-login100-form-btn">
            <p>Already own an account? <a href="/login">Login Here</a> </p>
          </div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/bootstrap/js/popper.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/daterangepicker/moment.min.js"></script>
	<script src="vendors/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendors/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script type="text/javascript">
function readURL(input) {
	if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
					$('#imagePreview').css('background-image', 'url('+e.target.result +')');
					$('#imagePreview').hide();
					$('#imagePreview').fadeIn(650);
			}
			reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload").change(function() {
	readURL(this);
});
</script>
</body>
</html>
<?php /**PATH C:\xampp2\htdocs\schoolapp\resources\views/auth/register.blade.php ENDPATH**/ ?>