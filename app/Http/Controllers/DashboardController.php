<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\User;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   *
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public static function sec_ago()
  {
    $email = \Auth::user()->email;
    $joined = \DB::table('users')->where('email', ''.$email.'')->value('created_at');

    $seconds_ago = (time() - strtotime(''.$joined.''));

if ($seconds_ago >= 31536000) {
    echo "Joined " . intval($seconds_ago / 31536000) . " year(s) ago";
} elseif ($seconds_ago >= 2419200) {
    echo "Joined " . intval($seconds_ago / 2419200) . " month(s) ago";
} elseif ($seconds_ago >= 86400) {
    echo "Joined " . intval($seconds_ago / 86400) . " day(s) ago";
} elseif ($seconds_ago >= 3600) {
    echo "Joined " . intval($seconds_ago / 3600) . " hour(s) ago";
} elseif ($seconds_ago >= 60) {
    echo "Joined " . intval($seconds_ago / 60) . " minute(s) ago";
} else {
    echo "Joined less than a minute ago";
}
  }

}
