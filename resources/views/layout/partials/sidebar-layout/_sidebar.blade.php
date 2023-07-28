<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_logo')

	<?php $guard = request()->segment(1); ?>
			
			<?php if ($guard === "property-owner"){  ?>
				@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_property_owner_menu')
				<?php } ?>
				
				<?php if ($guard === "superadmin"){  ?>
					@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_menu')
				<?php } ?>

	@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/sidebar/_footer')
</div>
<!--end::Sidebar-->
