<div class="app-sidebar menu-fixed" data-background-color="man-of-steel" data-scroll-to-active="true">
    <!-- main menu header-->
    @php
        $setting = DB::table('settings')->first();
    @endphp
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
        <div class="logo clearfix">
            <a class="logo-text float-left" href="{{ route('dashboard.index') }}">
            <div class="logo-img" ><img src="{{ asset($setting->logo)  }}" alt="{{ $setting->logoalt }}" width="100"></div>
            <span class="text"></span></a><a class="nav-toggle d-none d-lg-none d-xl-block" href="javascript:;" id="sidebarToggle"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" href="javascript:;" id="sidebarClose"><i class="ft-x"></i></a>
        </div>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content main-menu-content">
        <div class="nav-container">
            <ul class="navigation navigation-main" data-menu="menu-navigation" id="main-menu-navigation">
                @if(Auth::check() && Auth::user()->role_id == 1)
                <li class="nav-item {{ Route::is('dashboard.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}"><i class="ft-home"></i>
                        <span class="menu-item">Dashboard</span>
                    </a>
                </li>
                <li class="has-sub nav-item ">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Booking</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('bookingform.index') ? 'active' : '' }}">
                            <a href="{{ route('bookingform.index') }}"><i class="ft-eye"></i><span class="menu-item" >View Course Booking</span></a>
                        </li>
                        <li class="{{ Route::is('bookingworkshop.index') ? 'active' : '' }}">
                            <a href="{{ route('bookingworkshop.index') }}"><i class="ft-eye"></i><span class="menu-item" >View Workshop Booking</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item ">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Forms</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('forms.index') ? 'active' : '' }}">
                            <a href="{{ route('forms.index') }}"><i class="ft-eye"></i><span class="menu-item" >View Contact Forms</span></a>
                        </li>
                        <li class="{{ Route::is('enquiry.index') ? 'active' : '' }}">
                            <a href="{{ route('enquiry.index') }}"><i class="ft-eye"></i><span class="menu-item" >View Enqyiry Forms</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item ">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Course</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('course.create') ? 'active' : '' }}">
                            <a href="{{ route('course.create') }}"><i class="ft-plus-square"></i><span class="menu-item">Add Course</span></a>
                        </li>
                        <li class="{{ Route::is('course.index') ? 'active' : '' }}">
                            <a href="{{ route('course.index') }}"><i class="ft-eye"></i><span class="menu-item" >View Course</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item ">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Workshop</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('workshop.create') ? 'active' : '' }}">
                            <a href="{{ route('workshop.create') }}"><i class="ft-plus-square"></i><span class="menu-item">Add Workshop</span></a>
                        </li>
                        <li class="{{ Route::is('workshop.index') ? 'active' : '' }}">
                            <a href="{{ route('workshop.index') }}"><i class="ft-eye"></i><span class="menu-item" >View Workshop</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Blog</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('blog.create') ? 'active' : '' }}">
                            <a href="{{ route('blog.create') }}"><i class="ft-plus-square"></i><span class="menu-item">Add Blog</span></a>
                        </li>
                        <li class="{{ Route::is('blog.index') ? 'active' : '' }}">
                            <a href="{{ route('blog.index') }}"><i class="ft-eye"></i><span class="menu-item">View Blog</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Faq's</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('supportfaq.create') ? 'active' : '' }}">
                            <a href="{{ route('supportfaq.create') }}"><i class="ft-plus-square"></i><span class="menu-item" >Add Faq's</span></a>
                        </li>
                        <li class="{{ Route::is('supportfaq.index') ? 'active' : '' }}">
                            <a href="{{ route('supportfaq.index') }}"><i class="ft-eye"></i><span class="menu-item">View Faq's</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Seo</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('seo.create') ? 'active' : '' }}">
                            <a href="{{ route('seo.create') }}"><i class="ft-plus-square"></i><span class="menu-item" >Add Seo</span></a>
                        </li>
                        <li class="{{ Route::is('seo.index') ? 'active' : '' }}">
                            <a href="{{ route('seo.index') }}"><i class="ft-eye"></i><span class="menu-item">View Seo</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Testimonial</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('testimonial.create') ? 'active' : '' }}">
                            <a href="{{ route('testimonial.create') }}"><i class="ft-plus-square"></i><span class="menu-item" >Add Testimonial</span></a>
                        </li>
                        <li class="{{ Route::is('testimonial.index') ? 'active' : '' }}">
                            <a href="{{ route('testimonial.index') }}"><i class="ft-eye"></i><span class="menu-item">View Testimonial</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Founders</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('founders.create') ? 'active' : '' }}">
                            <a href="{{ route('founders.create') }}"><i class="ft-plus-square"></i><span class="menu-item" >Add Founder</span></a>
                        </li>
                        <li class="{{ Route::is('founders.index') ? 'active' : '' }}">
                            <a href="{{ route('founders.index') }}"><i class="ft-eye"></i><span class="menu-item">View Founder</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Gallery</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('gallery.index') ? 'active' : '' }}">
                            <a href="{{ route('gallery.index') }}"><i class="ft-eye"></i><span class="menu-item">View Gallery</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Static Page</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('staticpage.create') ? 'active' : '' }}">
                            <a href="{{ route('staticpage.create') }}"><i class="ft-plus-square"></i><span class="menu-item" >Add Staticpage</span></a>
                        </li>
                        <li class="{{ Route::is('staticpage.index') ? 'active' : '' }}">
                            <a href="{{ route('staticpage.index') }}"><i class="ft-eye"></i><span class="menu-item">View Staticpage</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-code"></i><span class="menu-title">Code</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('code') ? 'active' : '' }}">
                            <a href="{{ route('code') }}"><i class="ft-plus-square"></i><span class="menu-item" >Add Header/Footer</span></a>
                        </li>
                        <li class="{{ Route::is('add.customcode') ? 'active' : '' }}">
                            <a href="{{ route('add.customcode') }}"><i class="ft-plus-square"></i><span class="menu-item">Add Custom JS/CSS</span></a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('media.create') }}"><i class="ft-image"></i><span class="menu-item" >Media</span></a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('setting') }}"><i class="icon-settings"></i><span class="menu-item" >Setting</span></a>
                </li>
                @elseif(Auth::check() && Auth::user()->role_id == 0)
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Blog</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('blog.create') ? 'active' : '' }}">
                            <a href="{{ route('blog.create') }}"><i class="ft-plus-square"></i><span class="menu-item">Add Blog</span></a>
                        </li>
                        <li class="{{ Route::is('blog.index') ? 'active' : '' }}">
                            <a href="{{ route('blog.index') }}"><i class="ft-eye"></i><span class="menu-item">View Blog</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub nav-item">
                    <a href="javascript:void();"><i class="ft-file-text"></i><span class="menu-title">Product</span></a>
                    <ul class="menu-content">
                        <li class="{{ Route::is('product.create') ? 'active' : '' }}">
                            <a href="{{ route('product.create') }}"><i class="ft-plus-square"></i><span class="menu-item">Add Product</span></a>
                        </li>
                        <li class="{{ Route::is('product.index') ? 'active' : '' }}">
                            <a href="{{ route('product.index') }}"><i class="ft-eye"></i><span class="menu-item">View Product</span></a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i><span class="menu-item" >Logout</span></a>
                    <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>