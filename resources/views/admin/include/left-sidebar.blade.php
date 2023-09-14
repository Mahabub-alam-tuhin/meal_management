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

</ul>
