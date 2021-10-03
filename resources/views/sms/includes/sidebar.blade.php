<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav pt-5">
                    <ul id="sidebarnav">
                      
                        <li class="sidebar-item ">
                            <a class="sidebar-link" href="{{route('home')}}"><i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Users </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('user/add/new')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">New user </span></a></li>
                                
                                <li class="sidebar-item"><a href="{{route('userManagement')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Manage users  </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Contractos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('form/staff/new')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu">Staff </span></a></li>
                                
                                <li class="sidebar-item"><a href="{{route('form/view/detail')}}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Staff List </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>