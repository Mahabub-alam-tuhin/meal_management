<div class="page-sidebar custom-scrollbar">
    <ul class="sidebar-menu">
        <li>
        <div class="sidebar-title">Mangement</div><a href="javascript:void(0)">
           <i><a href="#"></i><span>Profile</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)">
           <i><a
                        href="{{ route('frontEnd.Booking.add_user_Meal_Booking') }}"></i><span>Reserve Meal</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)"><i><a href="{{ route('frontEnd.Booking.show') }}"></i><span>Meal list</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)"><i><a href="{{ route('frontEnd.user_payment.show') }}"></i><span>Payment list</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)"><i><a href="{{ route('frontEnd.user_contact.show') }}"></i><span>Contact Menu</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
    </ul>
    {{-- end sidebar --}}
</div>

{{-- <ul class="sidebar-submenu">
                <li><a href="{{ route('frontEnd.Booking.add_user_Meal_Booking') }}"></i> Add Meal </a></li>
                <li><a href="{{route('frontEnd.Booking.show')}}"></i> Show Meal </a></li>
            </ul> --}}
