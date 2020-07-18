@extends('layout.template')
@section('content')
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>Best</span> App.</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
								<a href="/courses" class="site-btn">View Courses</a>
								<a href="/register" class="site-btn sb-c2">Sign Up</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img src="img/hero-bg.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="hs-text">
								<h2><span>Free </span> Courses.</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
								<a href="/courses" class="site-btn">Course Tour</a>
								<a href="/register" class="site-btn sb-c2">Register Now</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="hr-img">
								<img src="/img/hero-bg.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
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
            @if(count($courses) > 0)
@foreach ($courses as $course)
                <!-- start of div -->
				<div class="col-lg-4 col-sm-6">
                <div class="course-card">
        <!-- <div class="badge">New</div> -->
        <div class="fav"><a href=""><i class="fa fa-heart"></i></a></div>
		<div class="course-tumb">
			<img src="/img/{{$course->course_image}}" alt="">
		</div>
		<div class="course-details">
			<span class="course-catagory">{{$course->course_cat}}</span>
			<h4><a href="">{{mb_strimwidth($course->course_title, 0, 35, "...")}}</a></h4>
			<p>{{mb_strimwidth($course->course_desc, 0, 80, "&nbsp;...")}}</p>
			<div class="course-bottom-details">
				<div class="course-price">FREE</div>
				<div class="course-links">
                    <div class="row">
                    <div class="col-md-6"></div>
                    @guest
                    <div class="col-md-6"><a href="/login" class="site-btn2">Enroll</a></div>
                    @else
                    <?php

                    $email = \Auth::user()->email;
                    $getenrolled = \DB::table('enrolled')->where('course_id', '=', ''.$course->course_id.'')->where('email','=', ''.$email.'')->count();
                    if($getenrolled >= 1){
                         echo '<div class="col-md-6"><a class="site-btn3"><span>Continue</span></a></div>';
                    }else if($getenrolled <= 0){
                        ?>
                        <div class="col-md-6"><a href="/enrollnow/{{$course->course_id}}" class="site-btn2">Enroll</a></div>

                    <?php
                    }
                    ?>
@endauth
                    </div>
				</div>
			</div>
		</div>
	</div>
				</div>
<!-- end of div -->
@endforeach
@endif
			</div>
		</div>
	</section>
	<!-- Concept section end -->


	<!-- How section -->
	<section class="how-section spad set-bg" data-setbg="img/how-to-bg.jpg">
		<div class="container text-white">
			<div class="section-title">
				<h2>How it works</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="how-item">
						<div class="hi-icon">
							<img src="img/icons/brain.png" alt="">
						</div>
						<h4>Create an account</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="how-item">
						<div class="hi-icon">
							<img src="img/icons/pointer.png" alt="">
						</div>
						<h4>Enroll</h4>
						<p>Donec in sodales dui, a blandit nunc. Pellen-tesque id eros venenatis, sollicitudin neque sodales, vehicula nibh. Nam massa odio, portti-tor vitae efficitur non. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="how-item">
						<div class="hi-icon">
							<img src="img/icons/smartphone.png" alt="">
						</div>
						<h4>Start Learning</h4>
						<p>Ablandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultric-ies volutpat tellus. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- How section end -->

<!-- Intro section -->
<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Unlimited Access over 1K Courses</h2>
					</div>
				</div>
				<div class="col-lg-6 text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
					<a href="#" class="site-btn">Try it now</a>
                </div>
                <div class="col-lg-6"  style="padding-top: 30px;">
					<img src="/img/bg23.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


@endsection

