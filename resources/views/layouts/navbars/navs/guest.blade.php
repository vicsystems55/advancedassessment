<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark bg-white">
    <div class="container px-4">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img style="width: 170px; height:100px;" class="img-responsive" src="{{ asset('argon') }}/img/brand/bluee.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/bluee.png">
                        </a>
                    </div>
                    <style>
                    .navbar-toggler{
                        background-color: red;
                    }
                    </style>
                    <div class=" col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto ">
                
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                        <i class="ni ni-circle-08 text-dark"></i>
                        <span class="nav-link-inner--text text-dark">{{ __('Register') }}</span>
                    </a>
                </li>
                
               
            </ul>

            <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                    <i class="ni ni-key-25 text-dark"></i>
                        <span class="nav-link-inner--text text-dark">{{ __('Login') }}</span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">sample</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('login') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('Student Login') }}</span>
                    </a>
                    <a href="{{ route('school_login') }}" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('School Admin Login') }}</span>
                    </a>

                    <a href="{{ route('admin_login') }}" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Super Admin Login') }}</span>
                    </a>
                   
                    
                   
                </div>
            </li>
        </ul>
        </div>
    </div>
</nav>