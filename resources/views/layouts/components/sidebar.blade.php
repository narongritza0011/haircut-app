<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">

                @if (Auth::user()->role == 1)
                    {
                    <li class="sidebar-item {{ request()->is('admin/dashboard') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}" aria-expanded="false"><i
                                class="mdi mdi-view-dashboard"></i><span class="hide-menu">หน้าหลัก</span></a></li>
                    </li>
                    <li class="sidebar-item {{ request()->is('admin/users*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/users*') ? 'active' : '' }}"
                            href="{{ route('admin.users') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">พนักงาน <span
                                    class="badge badge-danger">{{ count_admin() }}</span></span></a></li>
                    <li class="sidebar-item {{ request()->is('admin/member*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/member*') ? 'active' : '' }}"
                            href="{{ route('admin.member') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">สมาชิก <span
                                    class="badge badge-danger">{{ count_user() }}</span></span></a></li>
                    <li class="sidebar-item  {{ request()->is('admin/service*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/service*') ? 'active' : '' }}"
                            href="{{ route('admin.service') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">บริการ <span
                                    class="badge badge-danger">{{ count_service() }}</span></span></a></li>
                    <li class="sidebar-item  {{ request()->is('admin/time*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/time*') ? 'active' : '' }}"
                            href="{{ route('admin.time') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">เวลาจอง <span
                                    class="badge badge-danger">{{ count_time() }}</span></span></a></li>
                    <li class="sidebar-item  {{ request()->is('admin/hair*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/hair*') ? 'active' : '' }}"
                            href="{{ route('admin.hair') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">รูปภาพทรงผม <span
                                    class="badge badge-danger">{{ count_hair() }}</span></span></a></li>


                    <li class="sidebar-item  {{ request()->is('admin/appointment*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/appointment*') ? 'active' : '' }}"
                            href="{{ route('admin.appointment.all') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">รายการจองคิว <span
                                    class="badge badge-danger">{{ count_order() }}</span></span></a></li>


                    <li class="sidebar-item  {{ request()->is('admin/contact*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/contact*') ? 'active' : '' }}"
                            href="{{ route('admin.contact') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">ช่องทางการติดต่อ</span></a>
                    </li>



                    <li class="sidebar-item  {{ request()->is('admin/collect*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('admin/collect*') ? 'active' : '' }}"
                            href="{{ route('admin.collect') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">ลูกค้าที่ใช้เเต้ม <span
                                    class="badge badge-danger">{{ count_collect() }}</span></span></a>
                    </li>
                @elseif(Auth::user()->role == 2)
                    <li class="sidebar-item {{ request()->is('user/dashboard*') ? 'selected' : '' }}"> <a
                            class="sidebar-link waves-effect waves-dark sidebar-link  {{ request()->is('user/dashboard*') ? 'active' : '' }}"
                            href="{{ route('user.dashboard') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">หน้าหลัก</span></a></li>


                    <li class="sidebar-item "> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('user.point') }}" aria-expanded="false"><i
                                class="mdi mdi-chart-bar "></i><span class="hide-menu">สะสมเเต้ม</span></a></li>
                @endif







            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
