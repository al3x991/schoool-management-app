<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{

    public function index()
    {
        $courses = Course::take(3)->get();

        return view('index')->with('courses', $courses);
    }
}
