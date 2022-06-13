        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Operations
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Vehicle Operations</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('admin.category.index')}}">Categories</a>
                        <a class="collapse-item" href="{{route('admin.car.index')}}">Vehicles</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Reservation Orders -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.reservation.index')}}">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Reservations</span></a>
            </li>
            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.user.index')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
            </li>
            <!-- Nav Item - Reviews -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.comment.index')}}">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Reviews</span></a>
            </li>
            <!-- Nav Item - Messages -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.message.index')}}">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Contact Form Messages</span></a>
            </li>
            <!-- Nav Item - FAQ -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.faq.index')}}">
                    <i class="fas fa-fw fa-question-circle"></i>
                    <span>FAQ</span></a>
            </li>
            <!-- Nav Item - Settings -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.setting')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span></a>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->