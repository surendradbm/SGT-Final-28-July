<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Timer-->
    <div class="app-navbar-item ms-5 ms-md-5 d-lg-flex d-none">
        <div class="timer">
            <h1>02:15:23</h1>
        </div>
    </div>
    <!--end::Timer-->
    <!--begin::Notifications-->
    <div class="app-navbar-item ms-5 ms-md-5">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.58003 1.58L4.15003 0.15C1.75003 1.98 0.170029 4.8 0.0300293 8H2.03003C2.18003 5.35 3.54003 3.03 5.58003 1.58ZM17.97 8H19.97C19.82 4.8 18.24 1.98 15.85 0.15L14.43 1.58C16.45 3.03 17.82 5.35 17.97 8ZM16 8.5C16 5.43 14.36 2.86 11.5 2.18V1.5C11.5 0.67 10.83 0 10 0C9.17003 0 8.50003 0.67 8.50003 1.5V2.18C5.63003 2.86 4.00003 5.42 4.00003 8.5V13.5L2.00003 15.5V16.5H18V15.5L16 13.5V8.5ZM10 19.5C10.14 19.5 10.27 19.49 10.4 19.46C11.05 19.32 11.58 18.88 11.84 18.28C11.94 18.04 11.99 17.78 11.99 17.5H7.99003C8.00003 18.6 8.89003 19.5 10 19.5Z"
                    fill="#244B8A" />
            </svg>
        </div>
        @include('partials/menus/_notifications-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-5 ms-md-5" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end" class="header-user-profile">
            <div class="symbol symbol-30px symbol-md-40px rounded-circle overflow-hidden">
                <img src="{{ asset('/uploads/profile_pictures/' . auth()->user()->avatar) }}" class="image_table"
                    alt="user">

            </div>
            <h6 class="name">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                <i class="fas fa-chevron-down"></i>
        </div>

        @include('partials/menus/_user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
</div>
<!--end::Navbar-->
