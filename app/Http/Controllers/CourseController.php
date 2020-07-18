<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Enrolled;

class CourseController extends Controller
{

    public function index(){
        $courses = Course::all();

      return view('courses')->with('courses', $courses);

        }

        public function enroll($id){
            $email = \Auth::user()->email;
            $enroll = new Enrolled;
            $enroll->email = $email;
            $enroll->course_id = $id;
            $enroll->save();
            return redirect()->back()->with('success', 'Your course enrollment was successful!');
        }
}
