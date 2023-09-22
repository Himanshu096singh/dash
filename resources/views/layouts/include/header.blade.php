<nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
    <div class="container-fluid navbar-wrapper">
        <div class="navbar-header d-flex">
            <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center" data-toggle="collapse">
                <i class="ft-menu font-medium-3"></i>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item nav-search">
                    {{-- <a class="nav-link nav-link-search" href="javascript:"><i class="ft-search font-medium-3"></i></a> --}}
                    <div class="search-input">
                        <div class="search-input-icon">
                            <i class="ft-search font-medium-3"></i>
                        </div><input class="input" data-search="template-search" placeholder="Explore Apex..." tabindex="0" type="text">
                        <div class="search-input-close">
                            <i class="ft-x font-medium-3"></i>
                        </div>
                        <ul class="search-list"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navbar-container">
            <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="dropdown nav-item mr-1">
                        <a class="nav-link dropdown-toggle user-dropdown d-flex align-items-end" data-toggle="dropdown" href="javascript:;" id="dropdownBasic2">
                        <div class="user d-md-flex d-none mr-2">
                            <span class="text-right">{{ Auth::user()->name }}</span><span class="text-right text-muted font-small-3">Available</span>
                        </div><img alt="avatar" class="avatar" height="35" src="{{ asset('back/img/avatar-s-1.png') }}" width="35"></a>
                        <div aria-labelledby="dropdownBasic2" class="dropdown-menu text-left dropdown-menu-right m-0 pb-0">
                            <a class="dropdown-item" href="javascript:void();">
                                <div class="d-flex align-items-center">
                                    <i class="ft-edit mr-2"></i><span>Edit Profile</span>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:void();">
                                <div class="d-flex align-items-center">
                                    <i class="ft-mail mr-2"></i><span>My Inbox</span>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="d-flex align-items-center">
                                    <i class="ft-power mr-2"></i><span>Logout</span>
                                </div>
                            </a>
                            <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
