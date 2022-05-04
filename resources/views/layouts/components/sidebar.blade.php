<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item {{ request()->is('admin/dashboard') ? 'selected' : '' }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-view-dashboard"></i><span class="hide-menu">หน้าหลัก</span></a></li>
                </li>
                <li class="sidebar-item {{ request()->is('admin/users*') ? 'selected' : '' }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/users*') ? 'active' : '' }}"
                        href="{{ route('admin.users') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">พนักงาน</span></a></li>
                <li class="sidebar-item {{ request()->is('admin/member*') ? 'selected' : '' }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/member*') ? 'active' : '' }}"
                        href="{{ route('admin.member') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">สมาชิก</span></a></li>
                <li class="sidebar-item  {{ request()->is('admin/service*') ? 'selected' : '' }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/service*') ? 'active' : '' }}"
                        href="{{ route('admin.service') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">บริการ</span></a></li>
                <li class="sidebar-item  {{ request()->is('admin/time*') ? 'selected' : '' }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/time*') ? 'active' : '' }}"
                        href="{{ route('admin.time') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">เวลาจอง</span></a></li>
                <li class="sidebar-item  {{ request()->is('admin/hair*') ? 'selected' : '' }}"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/hair*') ? 'active' : '' }}"
                        href="{{ route('admin.hair') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">รูปภาพทรงผม</span></a></li>

                <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('user.dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">การจองคิว</span></a></li>
                <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('user.dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bar "></i><span class="hide-menu">สินค้า</span></a></li>





            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
