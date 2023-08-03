<!--begin::Menu wrapper-->
<div class="app-header-menu app-header-mobile-drawer align-items-center" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <!--begin::Menu-->
    @php $user = request()->segment(2); @endphp
    @php $module = request()->segment(3); @endphp
    <div>
        <h1 class="header-title mb-0">
            @if ($user == 'properties' && $module == 'create')
                Create New Property
            @endif
        </h1>
    </div>
</div>
<!--end::Menu wrapper-->
