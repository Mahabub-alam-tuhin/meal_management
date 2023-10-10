<div class="page-main-header">
    <div class="main-header-left" semilight-bg-color="bg-default-light-colo">
        <div class="logo-wrapper"><a href="{{ route('frontEnd.Meal_Booking.Meal_Booking') }}"><img
                    src="/backend/assets/logo-light.png" class="image-dark" alt=""><img
                    src="/backend/assets/logo-light-dark-layout.png" class="image-light" alt=""></a>
        </div>
    </div>
    <div class="main-header-right row" header-bg-color="bg-default-light-colo">
        <div class="mobile-sidebar col-1 ps-0">
            <div class="text-start switch-sm"><label class="switch"><input type="checkbox"
                        id="sidebar-toggle"><span class="switch-state"></span></label></div>
        </div>
        <div class="nav-right col">
            <ul class="nav-menus">
                <li><a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark"><img
                            class="align-self-center pull-right me-2" src="/backend/assets/browser.png"
                            alt="header-browser"></a></li>
                <li class="onhover-dropdown">
                    <div class="d-flex align-items-center"><img
                            class="align-self-center pull-right flex-shrink-0 me-2"
                            src="/backend/assets/user.png" alt="header-user">
                        <div>
                            <h6 class="m-0 txt-dark f-16"> My Account <i
                                    class="fa fa-angle-down pull-right ms-2"></i></h6>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20">
                        <li><a href="#"><i class="icon-user"></i> Edit Profile </a></li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logOutForm').submit()">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Logout</span></div>
                                </div>
                            </a>
                            <form action="{{ route('logout') }}" method="post" id="logOutForm">
                                @csrf
                            </form>
                        </li>                    </ul>
                </li>
            </ul>
            <div class="d-lg-none mobile-toggle"><i class="icon-more"></i></div>
        </div>
    </div>
</div>