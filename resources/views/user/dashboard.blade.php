@extends('layout.template')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style>
.cert_status{
border: 1px solid #e3e3e3;
border-radius: 6px;
padding: 3px;
width: 60px;
}
.img-responsive2{
border-radius: 50%;
max-width:15%;
float: left;
width: 10%;
margin: 0 !important;
min-width:10%;
}
.follow_img{
margin: 0 !important;
}
.info h3{
font-size: 1.6em;
font-weight: 400;
padding: 5px;
margin-left: 60px;
}
.card2{

padding: 18px;
margin-bottom: 5px;
padding-right: 15px;
margin-top:5px;
}
.box{
border:1px solid #f6f6f6;
border-radius: 5px;
padding: 18px;
}
#showCompose:hover, #showCompose:active, #showCompose:visited {
color: #fff;
}
#showCompose{
margin-top: 20px;
margin-bottom: 40px;
}
.composeMail{
margin-top: 30px;
margin-bottom: 70px;
}
.hidden{
display: none;
}
</style>
<!-- CSS
================================================== -->
<!-- <link rel="stylesheet" href="../../teacherASP/css/plugins.css"> -->
<!-- Custom style -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="/css/dash.css" rel="stylesheet">
<div class="clearfix"></div>
<?php

$image = \DB::table('users')->where('id', '=', $userID)->value('user_image');
$name = \DB::table('users')->where('id', '=', $userID)->value('name');
$email = \DB::table('users')->where('id', '=', $userID)->value('email');

 ?>
    @section('content')
    <!-- Start Banner Area -->
<section class="relative">
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
      <div class="col-lg-8 col-md-12 text-center" style="padding-bottom: 130px;">
        <h1 class="wow fadeIn text-center" data-wow-duration="4s">User Profile</h1>
      </div>
      </div>
    </div>
  </div>
</section>
<section class="detail-desc advance-detail-pr gray-bg">

    <div class="container white-shadow">

        <div class="row">
          <form action="/teacher/user/updatePic" id="uploadimage" enctype="multipart/form-data" method="POST">
            <div class="detail-pic userloginfo">
              <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <img src="/img/user-profile-img/{{$image}}" class="img" alt="" /><label id="#bb"><a class="detail-edit" title="edit"><i class="fas fa-edit" style="color: #fff;"></i></a>

<input type="file" name="image" class="File" id="File"  size="60" style="display: none;" >
</label>
</div>
</form>
            <div class="detail-status"><span>{{ \App\Http\Controllers\DashboardController::sec_ago() }}</span></div>
        </div>

        <div class="row bottom-mrg">
            <div class="col-md-12 col-sm-12">
                <div class="advance-detail detail-desc-caption">
                    <h4>{{$name}}</h4><span class="designation"></span>
                    <ul>
                        <li><strong class="j-view">
                          <?php
                          $getCourseCount = \DB::table('enrolled')->where('email', '=', ''.$email.'')->count();
                          echo $getCourseCount;
                          ?>
                        </strong>My Courses</li>
                        <li><strong class="j-applied">
                             0
                        </strong>Following</li>
                        <li><strong class="j-shared">
                        0
                        </strong>Certifications</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row no-padd">
            <div class="detail pannel-footer">
                <div class="col-md-5 col-sm-5">
                    <ul class="detail-footer-social">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-sm-7">
</div>
            </div>
        </div>

    </div>
</section>
<section class="full-detail-description full-detail gray-bg">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="full-card">
              <div class="deatil-tab-employ tool-tab">
      <ul class="nav simple nav-tabs" id="simple-design-tab">
        <li class="nav-item"><a  data-toggle="tab" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#courses">Courses</a></li>
        <li class="nav-item"><a data-toggle="tab" href="#assess">Assessments</a></li>
        <li class="nav-item"><a data-toggle="tab" href="#following">Following</a></li>
        <li class="nav-item"><a data-toggle="tab" href="#messages">Messages </a></li>
        <li class="nav-item"><a data-toggle="tab" href="#settings">Settings</a></li>
      </ul>

      <!-- Start All Sec -->
      <div class="tab-content">
        <div id="about" class="tab-pane fade p-3">
          <h3>About Me</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum at voluptates debitis, ab beatae asperiores dolor architecto vel </p>
        </div>
        <div id="courses" class="tab-pane fade show active p-3">
          <h3>Courses</h3>
          <p>
              <div class="row">
          @if(count($cEnrolled) > 0)
@foreach ($cEnrolled as $enrolled)
<?php
$title = \DB::table('courses')->where('course_id', '=', $enrolled->course_id)->value('course_title');
$cat = \DB::table('courses')->where('course_id', '=', $enrolled->course_id)->value('course_cat');
$desc = \DB::table('courses')->where('course_id', '=', $enrolled->course_id)->value('course_desc');
$image = \DB::table('courses')->where('course_id', '=', $enrolled->course_id)->value('course_image');
?>
                <!-- start of div -->
				<div class="col-lg-4 col-sm-6">
                <div class="course-card">
        <!-- <div class="badge">New</div> -->
        <div class="fav"><a href=""><i class="fa fa-heart"></i></a></div>
		<div class="course-tumb">
			<img src="/img/{{$image}}" alt="">
		</div>
		<div class="course-details">
			<span class="course-catagory">{{$cat}}</span>
			<h4><a href="">{{mb_strimwidth($title, 0, 35, "...")}}</a></h4>
			<p>{{mb_strimwidth($desc, 0, 80, "&nbsp;...")}}</p>
			<div class="course-bottom-details">
				<div class="course-price">FREE</div>
				<div class="course-links">
                    <div class="row">
                    <div class="col-md-6"></div>
<div class="col-md-6"><a class="site-btn3"><span>Continue</span></a></div>
                    </div>
                </div>
                </div>
			</div>
		</div>
	</div>

<!-- end of div -->
@endforeach
@endif
<div class="text-center">
		{!! $cEnrolled->links() !!}
  </div>
</div>
        </p>
        </div>
        <!-- End About Sec -->







      </div>
      <!-- Start All Sec -->
</div>
</div>
</div>

<div class="clearfix"></div>
</section>

@endsection
