<ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6">
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/logins')?'active':''}}" href="{{route('notification.guard_app.logins')}}"><i class="bi bi-box-arrow-in-right fs-4 me-1"></i> Log In</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/shift')?'active':''}}" href="{{route('notification.guard_app.shift')}}"><i class="bi bi-collection-play-fill fs-4 me-1"></i> Shift</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/checkpoint')?'active':''}}" href="{{route('notification.guard_app.checkpoint')}}"><i class="bi bi-list-check fs-4 me-1"></i> Checkpoint</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/reports')?'active':''}}" href="{{route('notification.guard_app.reports')}}"><i class="bi bi-pie-chart-fill fs-4 me-1"></i> Reports</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/messenger')?'active':''}}" href="{{route('notification.guard_app.messenger')}}"><i class="bi bi-chat-right-text-fill fs-4 me-1"></i> Messenger</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/settings')?'active':''}}" href="{{route('notification.guard_app.settings')}}"><i class="bi bi-gear-fill fs-4 me-1"></i> Settings</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/leave-management')?'active':''}}" href="{{route('notification.guard_app.leave_management')}}"><i class="bi bi-pencil-square fs-4 me-1"></i> Leave Management</a>
    </li>
    <li class="nav-item me-0 mb-3">
        <a class="nav-link {{($guard.'/'.$guardMenu=='guard-app/account-settings')?'active':''}}" href="{{route('notification.guard_app.account_settings')}}"><i class="bi bi-ticket-fill fs-4 me-1"></i> Account Settings</a>
    </li>

</ul>
