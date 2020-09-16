<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-bran pt-0 mx--2" href="{{ route('home') }}">
            <img width="220" height="60" src="{{ asset('argon') }}/img/brand/bluee.png" class="navbar-brand-im" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                           
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span>kk</span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">l;
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('partner')) ? 'text-warning bg-secondary' : '' }} {{ (request()->is('partner')) ? 'active' : '' }}"  href="{{route('partner')}}">
                    <i class="fas fa-tachometer-alt"></i>
                         {{ __('Dashboard.') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('partners/investments')) ? 'active' : '' }}" href="{{ route('partners.investments')}}">
                    <i class="fas fa-chart-area text-warning"></i>
                        {{ __('Investments') }}
                    </a>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('partners/portfolio')) ? 'active' : '' }}" href="{{ route('partners.portfolio')}}">
                    <i class="fas fa-chart-area text-warning"></i>
                        {{ __('Portfolio') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('partners/profile')) ? 'active' : '' }}" href="{{ route('partners.profile') }}">
                    <i class="fas fa-cogs text-warning"></i>
                         {{ __('Profile') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('partners/reports')) ? 'active' : '' }}" href="{{ route('partners.reports') }}">
                    <i class="fas fa-cogs text-warning"></i>
                         {{ __('Reports') }}
                    </a>
                </li>
                <li class="nav-item">
                   
                    <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
<a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form2').submit();">
                     <i class="fas fa-sign-out-alt text-warning"></i>
                     Sign Out

                    </a>
                    
                </li>
              
                    
                
                
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Main Site</h6>
            <!-- Navigation -->
            
        </div>
    </div>
</nav>