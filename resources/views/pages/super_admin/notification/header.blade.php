<div class="row mb-5 mt-5">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                        Notifications</h1>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- First Section Ends --}}

<div class="row">
    <div class="col-md-12">
        <div class="card card-flush shadow-sm">
            <div class="card-body py-5">
                <div class="mb-5">
                    <div class="d-grid">
                        <ul class="nav nav-tabs nav-pills flex-nowrap text-nowrap">
                            <?php $guard = request()->segment(3); ?>
                            <?php $guardMenu = request()->segment(4); ?>
                            <li class="nav-item">
                                <a href="{{route('notification.guard_app.logins')}}" class="nav-link rounded-bottom-0 {{ ($guard=='guard-app')?'active':'' }}" id="div1"><i class="bi bi-person-square xyz fs-2"></i> Guard App</a>
                            </li>
                            <li class="nav-item">
                                <?php $property = request()->segment(3); ?>
                                <?php $propertyMenu = request()->segment(4); ?>
                                <a href="{{route('notification.property_owner.logins')}}" class="nav-link rounded-bottom-0 {{ ($property=='property-owner')?'active':'' }}" id="div2"><i class="bi bi-person-fill xyz fs-2"></i> Property Owner</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <h6>Modules List</h6>
                        <hr>
                        <div class="sidebar_div">
                            <div id="GuardApp" style="display:{{ ($guard=='guard-app')?'block':'none' }}">
                                @include('/pages/super_admin/notification/gaurd_menubar')
                            </div>
                            <div id="PropertyOwner" style="display:{{ ($property=='property-owner')?'block':'none' }}">
                                @include('/pages/super_admin/notification/owner_menubar')
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h6>Conditions</h6>
                        <hr>
