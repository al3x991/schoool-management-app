<?php $__env->startSection('content'); ?>
	<!-- Concept section -->
	<section class="concept-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
                        <h2>Browse Courses</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					</div>
				</div>

			</div>
			<div class="row">
            <?php if(count($courses) > 0): ?>
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- start of div -->
				<div class="col-lg-4 col-sm-6">
                <div class="course-card">
        <!-- <div class="badge">New</div> -->
        <div class="fav"><a href=""><i class="fa fa-heart"></i></a></div>
		<div class="course-tumb">
			<img src="/img/<?php echo e($course->course_image); ?>" alt="">
		</div>
		<div class="course-details">
			<span class="course-catagory"><?php echo e($course->course_cat); ?></span>
			<h4><a href=""><?php echo e(mb_strimwidth($course->course_title, 0, 35, "...")); ?></a></h4>
			<p><?php echo e(mb_strimwidth($course->course_desc, 0, 80, "&nbsp;...")); ?></p>
			<div class="course-bottom-details">
				<div class="course-price">FREE</div>
				<div class="course-links">
                    <div class="row">
                    <div class="col-md-6"></div>
                    <?php if(auth()->guard()->guest()): ?>
                    <div class="col-md-6"><a href="/login" class="site-btn2">Enroll</a></div>
                    <?php else: ?>
                    <?php
                    $email = \Auth::user()->email;
                    $getenrolled = \DB::table('enrolled')->where('course_id', '=', ''.$course->course_id.'')->where('email','=', ''.$email.'')->count();
                    if($getenrolled >= 1){
                         echo '<div class="col-md-6"><a class="site-btn3"><span>Continue</span></a></div>';
                    }else if($getenrolled <= 0){
                        ?>
                        <div class="col-md-6"><a href="/enrollnow/<?php echo e($course->course_id); ?>" class="site-btn2">Enroll</a></div>

                    <?php
                    }
                    ?>
<?php endif; ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
				</div>
<!-- end of div -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
			</div>
		</div>
	</section>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\schoolapp\resources\views/courses.blade.php ENDPATH**/ ?>