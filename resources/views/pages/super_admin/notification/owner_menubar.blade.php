<ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6">
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/logins')?'active':''}}"
            href="{{route('notification.property_owner.logins')}}"><i class="bi bi-box-arrow-in-right fs-4 me-1"></i> Log In</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/subscription')?'active':''}}"
            href="{{route('notification.property_owner.subscription')}}"><i class="bi bi-collection-play-fill fs-4 me-1"></i> Subscription</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/customers')?'active':''}}"
            href="{{route('notification.property_owner.customers')}}"><i class="bi bi-person-fill fs-4 me-1"></i> Customers</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/shift')?'active':''}}"
            href="{{route('notification.property_owner.shift')}}"><i class="bi bi-bank fs-4 me-1"></i> Shift</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/checkpoints')?'active':''}}"
            href="{{route('notification.property_owner.checkpoints')}}"><i class="bi bi-list-check fs-4 me-1"></i> Checkpoints</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/routes')?'active':''}}"
            href="{{route('notification.property_owner.routes')}}"><i class="bi bi-sign-turn-left-fill fs-4 me-1"></i> Routes</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/guard')?'active':''}}"
            href="{{route('notification.property_owner.guard')}}"><i class="bi bi-person-workspace fs-4 me-1"></i> Guard</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/reports')?'active':''}}"
            href="{{route('notification.property_owner.reports')}}"><i class="bi bi-pie-chart-fill fs-4 me-1"></i> Reports</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/roles-and-permissions')?'active':''}}"
            href="{{route('notification.property_owner.roles_and_permissions')}}"><i class="bi bi-ui-checks-grid fs-4 me-1"></i> Roles & Permissions</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/staff')?'active':''}}"
            href="{{route('notification.property_owner.staff')}}"><i class="bi bi-people-fill fs-4 me-1"></i> Staff</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/time-sheet')?'active':''}}"
            href="{{route('notification.property_owner.time_sheet')}}"><i class="bi bi-file-text-fill fs-4 me-1"></i> Time Sheet</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/leave-management')?'active':''}}"
            href="{{route('notification.property_owner.leave_management')}}"><i class="bi bi-pencil-square fs-4 me-1"></i> Leave Management</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/guard-attendance')?'active':''}}"
            href="{{route('notification.property_owner.guard_attendance')}}"><i class="bi bi-file-check-fill fs-4 me-1"></i> Guard Attendance</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($property.'/'.$propertyMenu=='property-owner/activity-log')?'active':''}}"
            href="{{route('notification.property_owner.activity_log')}}"><i class="bi bi-bounding-box-circles fs-4 me-1"></i> Activity Log</a>
    </li>

</ul>
