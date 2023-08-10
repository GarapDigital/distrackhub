<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="sidebar-item {{ request()->routeIs('panel.dashboard-page') ? 'selected' : '' }}" > <a class="sidebar-link" href="{{ route('panel.dashboard-page') }}" aria-expanded="false"><i
                            class="fas fa-home"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Browser Analytics</span></li>

                <li class="sidebar-item {{ request()->routeIs('panel.http-request.*') ? 'selected' : '' }}"> <a class="sidebar-link" href="{{ route('panel.http-request.index') }}"
                        aria-expanded="false"><i class="fas fa-chart-bar"></i><span
                            class="hide-menu">HTTP Request
                        </span></a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Connect Github</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href=""
                    aria-expanded="false"><i class="fab fa-github"></i><span
                        class="hide-menu">Github Repository
                    </span></a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
