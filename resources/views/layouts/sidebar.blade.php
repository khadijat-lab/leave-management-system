<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('home')}}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link text-body"><i
                        class="fa fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown text-body" data-toggle="dropdown"><i
                        class="fa fa-columns"></i> <span>Leave Management</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a class="nav-link" href="{{route('apply')}}">Request for Leave</a></li>
                    <li><a class="nav-link" href="{{route('active')}}">Ongoing Requests</a></li>
                    <li><a class="nav-link" href="">Granted Leaves</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown text-body" data-toggle="dropdown"><i
                        class="fa fa-user"></i>
                    <span>User Management</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a class="nav-link" href="">Add User</a></li>
                    <li><a class="nav-link" href="">All Users</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
