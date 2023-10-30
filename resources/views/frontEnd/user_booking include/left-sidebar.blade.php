<div class="page-sidebar custom-scrollbar ">
    <ul class="sidebar-menu" >
        <li>
            <div class="sidebar-title">Mangement</div><a href="javascript:void(0)">
                <i><a href="{{ route('frontEnd.user_profile.show') }}"></i><span>Profile</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)">
                <i><a href="{{ route('frontEnd.Booking.add_user_Meal_Booking') }}"></i><span>Reserve Meal</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)"><i><a href="{{ route('frontEnd.Booking.show') }}"></i><span>Meal list</span><i
                    class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)"><i><a href="{{ route('frontEnd.user_payment.show') }}"></i><span>Payment
                    list</span><i class="fa fa-angle-right pull-right"></i></a>

        </li>
        <li>
            <a href="javascript:void(0)"><i><a href="{{ route('frontEnd.user_contact.show') }}"></i><span>Contact
                    Menu</span><i class="fa fa-angle-right pull-right"></i></a>

        </li>
    </ul>
    {{-- end sidebar --}}
</div>
@push('custom-js')
    <script>
        // Function to hide the sidebar and header
        function hideSidebarAndHeader() {
            $(".page-sidebar").hide();
            $(".page-body-wrapper").addClass('sidebar-close');
            // Add additional code to hide the header if needed
        }

        // Function to show the sidebar and header
        function showSidebarAndHeader() {
            $(".page-sidebar").show();
            // Add additional code to show the header if needed
        }

        // Check the URL and hide/show sidebar and header as needed
        var currenturl = window.location.href;
        var segments = currenturl.split('/');
        console.log(segments);

        // You can use the segments array to determine which blade file is currently open
        // For example, if a specific URL segment corresponds to "all_details.blade.php"
        if (segments.includes("all_details")) {
            hideSidebarAndHeader();
        } else {
            showSidebarAndHeader();
        }
    </script>
@endpush


{{-- <ul class="sidebar-submenu">
                <li><a href="{{ route('frontEnd.Booking.add_user_Meal_Booking') }}"></i> Add Meal </a></li>
                <li><a href="{{route('frontEnd.Booking.show')}}"></i> Show Meal </a></li>
            </ul> --}}
