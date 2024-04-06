<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-maroon navbar-light border-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars text-white"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link d-flex" data-toggle="dropdown" href="#">
                <span class="mr-3 text-white">{{ Auth::user()->name }}</span>
                <img src="{{Vite::asset('resources/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <a href="{{route('profile.edit')}}" class="dropdown-item text-center">
                    <i class="fas fa-user-circle mr-2"></i> {{ __('Profile') }}
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}" class="dropdown-item text-center" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Keluar') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
