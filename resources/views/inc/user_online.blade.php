@guest
<div class="header-right">
			<a href="#" class="hr-btn">FAQ</a>
			<span>|</span>
			<div class="user-panel">
				<a href="/login" class="login">Login</a>
				<a href="/register" class="register">Create an account</a>
			</div>
        </div>
    @if (Route::has('register'))
        <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li> -->
    @endif
@else
<div class="header-right">
    <div class="dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle user-Account  dropbtn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <img src="/img/user-profile-img/{{ Auth::user()->user_image }}" class="profile--img" alt="logo">
             <span class="">{{ Auth::user()->name }}</span>
        </a>

        <div class="dropdown-content">
          <a class="" href="/user/dashboard">Dashboard</a>
          <a class="" href="#">Settings</a>
            <a class="" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
</div>
</div>
</div>

@endguest
