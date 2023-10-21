<ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item">
        <a href="#" class="menu-link">
            <i class="fa-solid fa-house"style=margin:5px;></i>
            <div data-i18n="Dashboards">Dashboard</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">User Management</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.user_management.add_user') }}" class="menu-link">
                    <div data-i18n="create user">Add User</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.user_management.all_user') }}" class="menu-link">
                    <div data-i18n="show user">All User</div>
                </a>
            </li>
        </ul>
    </li>


                {{-- user meal --}}

    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">User Meals</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.meal.add_meal') }}" class="menu-link">
                    <div data-i18n="create user">Add meal</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.meal.all_meal') }}" class="menu-link">
                    <div data-i18n="show user">All Meal</div>
                </a>
            </li>
           
        </ul>
    </li>
       {{-- Meal rate --}}
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">meal_rate</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.meal_rate.add_meal_rate') }}" class="menu-link">
                    <div data-i18n="create user">Add meal rate</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.meal_rate.all_meal_rate') }}" class="menu-link">
                    <div data-i18n="show user">All Meal Rate</div>
                </a>
            </li>
           
        </ul>
    </li>


    {{-- All expense --}}
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">Expense</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.daily_expense.add_expense') }}" class="menu-link">
                    <div data-i18n="show user">Add Expense</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.daily_expense.all_expense') }}" class="menu-link">
                    <div data-i18n="show user">All Expense</div>
                </a>
            </li>
        </ul>
    </li>

    {{-- All User --}}
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">User due list</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.user.all_user') }}" class="menu-link">
                    <div data-i18n="show user">All User</div>
                </a>
            </li>
        </ul>
    </li>
                {{-- All info --}}
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">info</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.info.all_info') }}" class="menu-link">
                    <div data-i18n="show user">All Info</div>
                </a>
            </li>
        </ul>
    </li>

    {{-- meal_booking --}}
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">user_meal_booking_list</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.meal_booking.all_meal') }}" class="menu-link">
                    <div data-i18n="show user">All Meal Booking</div>
                </a>
            </li>
        </ul>
    </li>

          {{-- Meal Register --}}
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
            <div data-i18n="Users">meal_register</div>
            <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('admin.meal_register.Add_user_meal') }}" class="menu-link">
                    <div data-i18n="show user">Add_user_meal</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.meal_register.all_user_meal') }}" class="menu-link">
                    <div data-i18n="show user">All_user_meal</div>
                </a>
            </li>
        </ul>
    </li>

           {{-- Add payment --}}

           <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Users">User Payment</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.user_payment.add_payment') }}" class="menu-link">
                        <div data-i18n="show user">Add_add_payment</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.user_payment.all_payment') }}" class="menu-link">
                        <div data-i18n="show user">All_user_payment</div>
                    </a>
                </li>
            </ul>
        </li>
</ul>
