@extends('layouts.app')
@section('content')
       <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto float-left">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block search-box"> <a
                                class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> 
                                <a class="srh-btn"><i class="ti-close"></i></a> 
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Mega Menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a
                                class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu scale-up-left">
                                <ul class="mega-dropdown-menu row p-0 m-0 list-inline">
                                    <li class="col-lg-3 col-xlg-2 mb-4">
                                        <h4 class="mb-3">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid"
                                                            src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="../assets/images/big/img2.jpg" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-slide="prev"> <span
                                                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next"> <span
                                                    class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 mb-4">
                                        <h4 class="mb-3">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="card mb-1">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card mb-0">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  mb-4">
                                        <h4 class="mb-3">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 mb-4">
                                        <h4 class="mb-3">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Mega Menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <h5 class="mb-0 font-weight-medium">Notifications</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative" style="height:250px;">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-danger rounded-circle btn-circle"><i class="fa fa-link"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Luanch Admin</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my new admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success rounded-circle btn-circle"><i class="ti-calendar"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Event today</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just a reminder that you have event</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i class="ti-settings"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Settings</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">You can customize this template as you want</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i class="ti-user"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <h5 class="font-weight-medium mb-0">You have 4 new messages</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body position-relative" style="height:250px;">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                                <ul class="dropdown-user list-style-none">
                                    <li>
                                        <div class="dw-user-box p-3 d-flex">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                            <div class="u-text ml-2">
                                                <h4 class="mb-0">Steave Jobs</h4>
                                                <p class="text-muted mb-1 font-14">varun@gmail.com</p>
                                                <a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm text-white d-inline-block">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="dropdown-divider"></li>
                                    <li class="user-list"><a class="px-3 py-2" href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" class="w-100" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                        <div class="dropdown-menu animated flipInY"> 
                            <a href="#" class="dropdown-item"><i class="ti-user"></i>
                                My Profile</a> 
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My
                                Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> 
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> 
                            <a href="authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 1 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 2 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 3 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index4.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 4 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index5.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 5 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index6.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 6 </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-content-copy"></i><span class="hide-menu">Page Layouts </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="layout-inner-fixed-left-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span
                                            class="hide-menu"> Inner Fixed Left Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="layout-inner-fixed-right-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span
                                            class="hide-menu"> Inner Fixed Right Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="layout-inner-left-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span
                                            class="hide-menu"> Inner Left Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="layout-inner-right-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-float-right"></i><span
                                            class="hide-menu"> Inner Right Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-fixed-header.html" class="sidebar-link"><i
                                            class="mdi mdi-view-quilt"></i><span class="hide-menu"> Fixed Header
                                        </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-fixed-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span
                                            class="hide-menu"> Fixed Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-fixed-header-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-view-column"></i><span class="hide-menu">
                                            Fixed Header &amp; Sidebar </span></a></li>
                                <li class="sidebar-item"><a href="page-layout-boxed-layout.html" class="sidebar-link"><i
                                            class="mdi mdi-view-carousel"></i><span class="hide-menu"> Box Layout
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Apps</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-calendar.html" aria-expanded="false"><i class="mdi mdi-calendar"></i><span
                                    class="hide-menu">Calendar</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-chats.html" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span
                                    class="hide-menu">Chat Apps</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-contacts.html" aria-expanded="false"><i class="mdi mdi-account-box"></i><span
                                    class="hide-menu">Contact</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-invoice.html" aria-expanded="false"><i class="mdi mdi-book"></i><span
                                    class="hide-menu">Invoice</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-notes.html" aria-expanded="false"><i class="mdi mdi-arrange-bring-forward"></i><span
                                    class="hide-menu">Notes</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-todo.html" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span
                                    class="hide-menu">Todo</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="app-taskboard.html" aria-expanded="false"><i class="mdi mdi-bulletin-board"></i><span
                                    class="hide-menu">Taskboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Inbox </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="inbox-email.html" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a></li>
                                <li class="sidebar-item"><a href="inbox-email-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Email Detail
                                        </span></a></li>
                                <li class="sidebar-item"><a href="inbox-email-compose.html" class="sidebar-link"><i
                                            class="mdi mdi-email-secure"></i><span class="hide-menu"> Email Compose
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Ticket </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="ticket-list.html" class="sidebar-link"><i
                                            class="mdi mdi-book-multiple"></i><span class="hide-menu"> Ticket List
                                        </span></a></li>
                                <li class="sidebar-item"><a href="ticket-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-book-plus"></i><span class="hide-menu"> Ticket Detail
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">UI</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-widgets"></i><span
                                    class="hide-menu">Ui Elements </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i
                                            class="mdi mdi-toggle-switch"></i><span class="hide-menu">
                                            Buttons</span></a></li>
                                <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i
                                            class="mdi mdi-tablet"></i><span class="hide-menu"> Modals</span></a></li>
                                <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><i
                                            class="mdi mdi-sort-variant"></i><span class="hide-menu"> Tab</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-tooltip-popover.html" class="sidebar-link"><i
                                            class="mdi mdi-image-filter-vintage"></i><span class="hide-menu"> Tooltip
                                            &amp; Popover</span></a></li>
                                <li class="sidebar-item"><a href="ui-notification.html" class="sidebar-link"><i
                                            class="mdi mdi-message-bulleted"></i><span class="hide-menu">
                                            Notification</span></a></li>
                                <li class="sidebar-item"><a href="ui-progressbar.html" class="sidebar-link"><i
                                            class="mdi mdi-poll"></i><span class="hide-menu"> Progressbar</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-typography.html" class="sidebar-link"><i
                                            class="mdi mdi-format-line-spacing"></i><span class="hide-menu">
                                            Typography</span></a></li>
                                <li class="sidebar-item"><a href="ui-bootstrap.html" class="sidebar-link"><i
                                            class="mdi mdi-bootstrap"></i><span class="hide-menu"> Bootstrap
                                            Ui</span></a></li>
                                <li class="sidebar-item"><a href="ui-breadcrumb.html" class="sidebar-link"><i
                                            class="mdi mdi-equal"></i><span class="hide-menu"> Breadcrumb</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-list-media.html" class="sidebar-link"><i
                                            class="mdi mdi-file-video"></i><span class="hide-menu"> List
                                            Media</span></a></li>
                                <li class="sidebar-item"><a href="ui-grid.html" class="sidebar-link"><i
                                            class="mdi mdi-view-module"></i><span class="hide-menu"> Grid</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-carousel.html" class="sidebar-link"><i
                                            class="mdi mdi-view-carousel"></i><span class="hide-menu">
                                            Carousel</span></a></li>
                                <li class="sidebar-item"><a href="ui-scrollspy.html" class="sidebar-link"><i
                                            class="mdi mdi-application"></i><span class="hide-menu">
                                            Scrollspy</span></a></li>
                                <li class="sidebar-item"><a href="ui-toasts.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-scan"></i><span class="hide-menu">
                                            Toasts</span></a></li>
                                <li class="sidebar-item"><a href="ui-spinner.html" class="sidebar-link"><i
                                            class="mdi mdi-apple-safari"></i><span class="hide-menu"> Spinner</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-credit-card-multiple"></i><span class="hide-menu">Cards</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="ui-cards.html" class="sidebar-link"><i
                                            class="mdi mdi-layers"></i><span class="hide-menu"> Basic Cards</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-card-customs.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Custom
                                            Cards</span></a></li>
                                <li class="sidebar-item"><a href="ui-card-weather.html" class="sidebar-link"><i
                                            class="mdi mdi-weather-fog"></i><span class="hide-menu">Weather
                                            Cards</span></a></li>
                                <li class="sidebar-item"><a href="ui-card-draggable.html" class="sidebar-link"><i
                                            class="mdi mdi-bandcamp"></i><span class="hide-menu">Draggable
                                            Cards</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-credit-card-multiple"></i><span
                                    class="hide-menu">Components</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="component-sweetalert.html" class="sidebar-link"><i
                                            class="mdi mdi-layers"></i><span class="hide-menu"> Sweet Alert</span></a>
                                </li>
                                <li class="sidebar-item"><a href="component-nestable.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-scan"></i><span
                                            class="hide-menu">Nestable</span></a></li>
                                <li class="sidebar-item"><a href="component-noui-slider.html" class="sidebar-link"><i
                                            class="mdi mdi-weather-fog"></i><span class="hide-menu">Noui
                                            slider</span></a></li>
                                <li class="sidebar-item"><a href="component-rating.html" class="sidebar-link"><i
                                            class="mdi mdi-bandcamp"></i><span class="hide-menu">Rating</span></a></li>
                                <li class="sidebar-item"><a href="component-toastr.html" class="sidebar-link"><i
                                            class="mdi mdi-poll"></i><span class="hide-menu">Toastr</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-gradient"></i><span
                                    class="hide-menu">Widgets </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="widgets-apps.html" class="sidebar-link"><i
                                            class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> Apps
                                            Widgets </span></a></li>
                                <li class="sidebar-item"><a href="widgets-data.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar"></i><span class="hide-menu"> Data Widgets
                                        </span></a></li>
                                <li class="sidebar-item"><a href="widgets-charts.html" class="sidebar-link"><i
                                            class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Charts
                                            Widgets</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Forms</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-collage"></i><span
                                    class="hide-menu">Form Elements</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><i
                                            class="mdi mdi-priority-low"></i><span class="hide-menu"> Forms
                                            Input</span></a></li>
                                <li class="sidebar-item"><a href="form-input-groups.html" class="sidebar-link"><i
                                            class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Input
                                            Groups</span></a></li>
                                <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><i
                                            class="mdi mdi-select-all"></i><span class="hide-menu"> Input
                                            Grid</span></a></li>
                                <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><i
                                            class="mdi mdi-shape-plus"></i><span class="hide-menu"> Checkboxes &amp;
                                            Radios</span></a></li>
                                <li class="sidebar-item"><a href="form-bootstrap-touchspin.html" class="sidebar-link"><i
                                            class="mdi mdi-switch"></i><span class="hide-menu"> Bootstrap
                                            Touchspin</span></a></li>
                                <li class="sidebar-item"><a href="form-bootstrap-switch.html" class="sidebar-link"><i
                                            class="mdi mdi-toggle-switch-off"></i><span class="hide-menu"> Bootstrap
                                            Switch</span></a></li>
                                <li class="sidebar-item"><a href="form-select2.html" class="sidebar-link"><i
                                            class="mdi mdi-relative-scale"></i><span class="hide-menu">
                                            Select2</span></a></li>
                                <li class="sidebar-item"><a href="form-dual-listbox.html" class="sidebar-link"><i
                                            class="mdi mdi-tab-unselected"></i><span class="hide-menu"> Dual
                                            Listbox</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Form Layouts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Basic
                                            Forms</span></a></li>
                                <li class="sidebar-item"><a href="form-horizontal.html" class="sidebar-link"><i
                                            class="mdi mdi-file-document-box"></i><span class="hide-menu"> Form
                                            Horizontal</span></a></li>
                                <li class="sidebar-item"><a href="form-actions.html" class="sidebar-link"><i
                                            class="mdi mdi-code-greater-than"></i><span class="hide-menu"> Form
                                            Actions</span></a></li>
                                <li class="sidebar-item"><a href="form-row-separator.html" class="sidebar-link"><i
                                            class="mdi mdi-code-equal"></i><span class="hide-menu"> Row
                                            Separator</span></a></li>
                                <li class="sidebar-item"><a href="form-bordered.html" class="sidebar-link"><i
                                            class="mdi mdi-flip-to-front"></i><span class="hide-menu"> Form
                                            Bordered</span></a></li>
                                <li class="sidebar-item"><a href="form-striped-row.html" class="sidebar-link"><i
                                            class="mdi mdi-content-duplicate"></i><span class="hide-menu"> Striped
                                            Rows</span></a></li>
                                <li class="sidebar-item"><a href="form-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form
                                            Detail</span></a></li>
                                <li class="sidebar-item"><a href="form-material.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Material</span></a></li>
                                <li class="sidebar-item"><a href="form-floating-input.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Floating Input</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-code-equal"></i><span
                                    class="hide-menu">Form Addons</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-paginator.html" class="sidebar-link"><i
                                            class="mdi mdi-export"></i><span class="hide-menu"> Paginator</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-img-cropper.html" class="sidebar-link"><i
                                            class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-dropzone.html" class="sidebar-link"><i
                                            class="mdi mdi-crosshairs-gps"></i><span class="hide-menu">
                                            Dropzone</span></a></li>
                                <li class="sidebar-item"><a href="form-mask.html" class="sidebar-link"><i
                                            class="mdi mdi-box-shadow"></i><span class="hide-menu"> Form Mask</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-typeahead.html" class="sidebar-link"><i
                                            class="mdi mdi-cards-variant"></i><span class="hide-menu"> Form
                                            Typehead</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span
                                    class="hide-menu">Form Validation</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-bootstrap-validation.html"
                                        class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span
                                            class="hide-menu"> Bootstrap Validation</span></a></li>
                                <li class="sidebar-item"><a href="form-custom-validation.html" class="sidebar-link"><i
                                            class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Custom
                                            Validation</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-pencil-box-outline"></i><span class="hide-menu">Form
                                    Pickers</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-picker-colorpicker.html" class="sidebar-link"><i
                                            class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Form
                                            Colorpicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-datetimepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-clock"></i><span
                                            class="hide-menu"> Form Datetimepicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-bootstrap-rangepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-range"></i><span
                                            class="hide-menu"> Form Bootstrap Rangepicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-bootstrap-datepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span
                                            class="hide-menu"> Form Bootstrap Datepicker</span></a></li>
                                <li class="sidebar-item"><a href="form-picker-material-datepicker.html"
                                        class="sidebar-link"><i class="mdi mdi-calendar-text"></i><span
                                            class="hide-menu"> Form Material Datepicker</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-dns"></i><span
                                    class="hide-menu">Form Editor</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="form-editor-ckeditor.html" class="sidebar-link"><i
                                            class="mdi mdi-drawing"></i><span class="hide-menu">Ck Editor</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-editor-quill.html" class="sidebar-link"><i
                                            class="mdi mdi-drupal"></i><span class="hide-menu">Quill Editor</span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-editor-summernote.html" class="sidebar-link"><i
                                            class="mdi mdi-brightness-6"></i><span class="hide-menu">Summernote
                                            Editor</span></a></li>
                                <li class="sidebar-item"><a href="form-editor-tinymce.html" class="sidebar-link"><i
                                            class="mdi mdi-bowling"></i><span class="hide-menu">Tinymce Edtor</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="form-wizard.html" aria-expanded="false"><i class="mdi mdi-cube-send"></i><span
                                    class="hide-menu">Form Wizard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="form-repeater.html" aria-expanded="false"><i class="mdi mdi-creation"></i><span
                                    class="hide-menu">Form Repeater</span></a></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Tables</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-none"></i><span
                                    class="hide-menu">Bootstrap Tables</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-border-all"></i><span class="hide-menu">Basic Table
                                        </span></a></li>
                                <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-border-left"></i><span class="hide-menu">Dark Basic Table
                                        </span></a></li>
                                <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><i
                                            class="mdi mdi-border-outside"></i><span class="hide-menu">Sizing Table
                                        </span></a></li>
                                <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><i
                                            class="mdi mdi-border-bottom"></i><span class="hide-menu">Coloured Table
                                            Layout</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-border-inside"></i><span class="hide-menu">Datatables</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-border-vertical"></i><span class="hide-menu"> Basic
                                            Initialisation</span></a></li>
                                <li class="sidebar-item"><a href="table-datatable-api.html" class="sidebar-link"><i
                                            class="mdi mdi-blur-linear"></i><span class="hide-menu"> API</span></a></li>
                                <li class="sidebar-item"><a href="table-datatable-advanced.html" class="sidebar-link"><i
                                            class="mdi mdi-border-style"></i><span class="hide-menu"> Advanced
                                            Initialisation</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-jsgrid.html" aria-expanded="false"><i class="mdi mdi-border-top"></i><span
                                    class="hide-menu">Table Jsgrid</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-responsive.html" aria-expanded="false"><i
                                    class="mdi mdi-border-style"></i><span class="hide-menu">Table Responsive</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-footable.html" aria-expanded="false"><i
                                    class="mdi mdi-tab-unselected"></i><span class="hide-menu">Table Footable</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-editable.html" aria-expanded="false"><i class="mdi mdi-table-edit"></i><span
                                    class="hide-menu">Table Editable</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-bootstrap.html" aria-expanded="false"><i
                                    class="mdi mdi-border-outside"></i><span class="hide-menu">Table
                                    Bootstrap</span></a></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Charts</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-morris.html" aria-expanded="false"><i
                                    class="mdi mdi-image-filter-tilt-shift"></i><span class="hide-menu"> Morris
                                    Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-flot.html" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu"> Flot Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-chart-js.html" aria-expanded="false"><i class="mdi mdi-svg"></i><span
                                    class="hide-menu">Chartjs</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-sparkline.html" aria-expanded="false"><i
                                    class="mdi mdi-chart-histogram"></i><span class="hide-menu">Sparkline
                                    Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="chart-chartist.html" aria-expanded="false"><i class="mdi mdi-blur"></i><span
                                    class="hide-menu">Chartis Chart</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-chemical-weapon"></i><span class="hide-menu">C3 Charts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="chart-c3-axis.html" class="sidebar-link"><i
                                            class="mdi mdi-arrange-bring-to-front"></i> <span class="hide-menu">Axis
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-c3-bar.html" class="sidebar-link"><i
                                            class="mdi mdi-arrange-send-to-back"></i> <span class="hide-menu">Bar
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-c3-data.html" class="sidebar-link"><i
                                            class="mdi mdi-backup-restore"></i> <span class="hide-menu">Data
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-c3-line.html" class="sidebar-link"><i
                                            class="mdi mdi-backburger"></i> <span class="hide-menu">Line
                                            Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Echarts</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="chart-echart-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-line"></i> <span class="hide-menu">Basic
                                            Charts</span></a></li>
                                <li class="sidebar-item"><a href="chart-echart-bar.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-scatterplot-hexbin"></i> <span class="hide-menu">Bar
                                            Chart</span></a></li>
                                <li class="sidebar-item"><a href="chart-echart-pie-doughnut.html"
                                        class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span
                                            class="hide-menu">Pie &amp; Doughnut Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Sample
                                Pages</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-cart-outline"></i><span class="hide-menu">Ecommerce Pages</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="eco-products.html" class="sidebar-link"><i
                                            class="mdi mdi-cards-variant"></i> <span
                                            class="hide-menu">Products</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-cart.html" class="sidebar-link"><i
                                            class="mdi mdi-cart"></i> <span class="hide-menu">Products Cart</span></a>
                                </li>
                                <li class="sidebar-item"><a href="eco-products-edit.html" class="sidebar-link"><i
                                            class="mdi mdi-cart-plus"></i> <span class="hide-menu">Products
                                            Edit</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-detail.html" class="sidebar-link"><i
                                            class="mdi mdi-camera-burst"></i> <span class="hide-menu">Product
                                            Details</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-orders.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-pie"></i> <span class="hide-menu">Product
                                            Orders</span></a></li>
                                <li class="sidebar-item"><a href="eco-products-checkout.html" class="sidebar-link"><i
                                            class="mdi mdi-clipboard-check"></i> <span class="hide-menu">Products
                                            Checkout</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">Sample Pages </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="starter-kit.html" class="sidebar-link"><i
                                            class="mdi mdi-crop-free"></i> <span class="hide-menu">Starter
                                            Kit</span></a></li>
                                <li class="sidebar-item"><a href="pages-animation.html" class="sidebar-link"><i
                                            class="mdi mdi-debug-step-over"></i> <span
                                            class="hide-menu">Animation</span></a></li>
                                <li class="sidebar-item"><a href="pages-search-result.html" class="sidebar-link"><i
                                            class="mdi mdi-search-web"></i> <span class="hide-menu">Search
                                            Result</span></a></li>
                                <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                            class="mdi mdi-camera-iris"></i> <span class="hide-menu">Gallery</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-treeview.html" class="sidebar-link"><i
                                            class="mdi mdi-file-tree"></i> <span class="hide-menu">Treeview</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-block-ui.html" class="sidebar-link"><i
                                            class="mdi mdi-codepen"></i> <span class="hide-menu">Block UI</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-session-timeout.html" class="sidebar-link"><i
                                            class="mdi mdi-timer-off"></i> <span class="hide-menu">Session
                                            Timeout</span></a></li>
                                <li class="sidebar-item"><a href="pages-session-idle-timeout.html"
                                        class="sidebar-link"><i class="mdi mdi-timer-sand-empty"></i> <span
                                            class="hide-menu">Session Idle Timeout</span></a></li>
                                <li class="sidebar-item"><a href="pages-utility-classes.html" class="sidebar-link"><i
                                            class="mdi mdi-tune"></i> <span class="hide-menu">Helper Classes</span></a>
                                </li>
                                <li class="sidebar-item"><a href="pages-maintenance.html" class="sidebar-link"><i
                                            class="mdi mdi-camera-iris"></i> <span class="hide-menu">Maintenance
                                            Page</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-circle"></i><span class="hide-menu">Authentication</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="authentication-login1.html" class="sidebar-link"><i
                                            class="mdi mdi-account-key"></i><span class="hide-menu"> Login </span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-login2.html" class="sidebar-link"><i
                                            class="mdi mdi-account-key"></i><span class="hide-menu"> Login 2 </span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-register1.html" class="sidebar-link"><i
                                            class="mdi mdi-account-plus"></i><span class="hide-menu">
                                            Register</span></a></li>
                                <li class="sidebar-item"><a href="authentication-register2.html" class="sidebar-link"><i
                                            class="mdi mdi-account-plus"></i><span class="hide-menu"> Register
                                            2</span></a></li>
                                <li class="sidebar-item"><a href="authentication-lockscreen.html"
                                        class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu">
                                            Lockscreen</span></a></li>
                                <li class="sidebar-item"><a href="authentication-recover-password.html"
                                        class="sidebar-link"><i class="mdi mdi-account-convert"></i><span
                                            class="hide-menu"> Recover password</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="ui-user-card.html" class="sidebar-link"><i
                                            class="mdi mdi-account-box"></i> <span class="hide-menu"> User Card
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-profile.html" class="sidebar-link"><i
                                            class="mdi mdi-account-network"></i><span class="hide-menu"> User
                                            Profile</span></a></li>
                                <li class="sidebar-item"><a href="ui-user-contacts.html" class="sidebar-link"><i
                                            class="mdi mdi-account-star-variant"></i><span class="hide-menu"> User
                                            Contact</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-ungroup"></i><span
                                    class="hide-menu">Invoice</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                            class="mdi mdi-vector-triangle"></i><span class="hide-menu"> Invoice Layout
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pages-invoice-list.html" class="sidebar-link"><i
                                            class="mdi mdi-vector-rectangle"></i><span class="hide-menu"> Invoice
                                            List</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-map"></i><span
                                    class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="map-google.html" class="sidebar-link"><i
                                            class="mdi mdi-google-maps"></i><span class="hide-menu"> Google Map
                                        </span></a></li>
                                <li class="sidebar-item"><a href="map-vector.html" class="sidebar-link"><i
                                            class="mdi mdi-map-marker-radius"></i><span class="hide-menu"> Vector
                                            Map</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon"></i> <span class="hide-menu"> Material Icons
                                        </span></a></li>
                                <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                            class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Fontawesome
                                            Icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-themify.html" class="sidebar-link"><i
                                            class="mdi mdi-chart-bubble"></i><span class="hide-menu"> Themify
                                            Icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-weather.html" class="sidebar-link"><i
                                            class="mdi mdi-weather-cloudy"></i><span class="hide-menu"> Weather
                                            Icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><i
                                            class="mdi mdi mdi-image-broken-variant"></i> <span class="hide-menu">
                                            Simple Line icons</span></a></li>
                                <li class="sidebar-item"><a href="icon-flag.html" class="sidebar-link"><i
                                            class="mdi mdi-flag-triangle"></i><span class="hide-menu"> Flag
                                            Icons</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-apple-safari"></i><span class="hide-menu">Timeline</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="timeline-center.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-fast"></i> <span class="hide-menu"> Center Timeline
                                        </span></a></li>
                                <li class="sidebar-item"><a href="timeline-horizontal.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-end"></i><span class="hide-menu"> Horizontal
                                            Timeline</span></a></li>
                                <li class="sidebar-item"><a href="timeline-left.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-in"></i><span class="hide-menu"> Left
                                            Timeline</span></a></li>
                                <li class="sidebar-item"><a href="timeline-right.html" class="sidebar-link"><i
                                            class="mdi mdi-clock-start"></i><span class="hide-menu"> Right
                                            Timeline</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-email-open-outline"></i><span class="hide-menu">Email
                                    Template</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="email-templete-alert.html" class="sidebar-link"><i
                                            class="mdi mdi-message-alert"></i> <span class="hide-menu"> Alert
                                        </span></a></li>
                                <li class="sidebar-item"><a href="email-templete-basic.html" class="sidebar-link"><i
                                            class="mdi mdi-message-bulleted"></i><span class="hide-menu">
                                            Basic</span></a></li>
                                <li class="sidebar-item"><a href="email-templete-billing.html" class="sidebar-link"><i
                                            class="mdi mdi-message-draw"></i><span class="hide-menu"> Billing</span></a>
                                </li>
                                <li class="sidebar-item"><a href="email-templete-password-reset.html"
                                        class="sidebar-link"><i class="mdi mdi-message-bulleted-off"></i><span
                                            class="hide-menu"> Password-Reset</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span
                                    class="hide-menu">Error Pages</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="error-400.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i> <span class="hide-menu"> Error 400
                                        </span></a></li>
                                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            403</span></a></li>
                                <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            404</span></a></li>
                                <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            500</span></a></li>
                                <li class="sidebar-item"><a href="error-503.html" class="sidebar-link"><i
                                            class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error
                                            503</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-notification-clear-all"></i><span class="hide-menu">Multi level
                                    dd</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.1</span></a>
                                </li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.2</span></a>
                                </li>
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><i class="mdi mdi-playlist-plus"></i> <span
                                            class="hide-menu">Menu 1.3</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.1</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.2</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.3</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> item
                                                    1.3.4</span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i
                                            class="mdi mdi-playlist-check"></i><span class="hide-menu"> item
                                            1.4</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../../../Documentation/document.html" aria-expanded="false"><i
                                    class="mdi mdi-content-paste"></i><span class="hide-menu">Documentation</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="authentication-login1.html" aria-expanded="false"><i
                                    class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">Dashboard</h3>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <div class="d-flex mr-3 ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>THIS MONTH</small></h6>
                                <h4 class="mt-0 text-info">$58,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart"></div>
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>LAST MONTH</small></h6>
                                <h4 class="mt-0 text-primary">$48,356</h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Sales Overview</h3>
                                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                            </div>
                                            <div class="ml-auto">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item px-2">
                                                        <h6 class="text-success"><i
                                                                class="fa fa-circle font-10 mr-2 "></i>Ample</h6>
                                                    </li>
                                                    <li class="list-inline-item px-2">
                                                        <h6 class="text-info"><i
                                                                class="fa fa-circle font-10 mr-2"></i>Pixel</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Our Visitors </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
                            </div>
                            <div class="card-body text-center border-top">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 mr-2 "></i>Mobile</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class=" text-primary"><i class="fa fa-circle font-10 mr-2"></i>Desktop</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class=" text-success"><i class="fa fa-circle font-10 mr-2"></i>Tablet</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card blog-widget">
                            <div class="card-body">
                                <div class="blog-image"><img src="../assets/images/big/img1.jpg" alt="img"
                                        class="img-fluid blog-img-height w-100" /></div>
                                <h3>Business development new rules for 2020</h3>
                                <label class="badge badge-pill badge-success py-1 px-2">Technology</label>
                                <p class="my-3">
                                    Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="read"><a href="javascript:void(0)" class="link font-medium">Read
                                            More</a></div>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0)" class="link mr-2" data-toggle="tooltip"
                                            title="Like"><i class="mdi mdi-heart-outline"></i></a> <a
                                            href="javascript:void(0)" class="link" data-toggle="tooltip"
                                            title="Share"><i class="mdi mdi-share-variant"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">Newsletter Campaign</h3>
                                        <h6 class="card-subtitle">Overview of Newsletter Campaign</h6>
                                    </div>
                                    <div class="ml-auto align-self-center">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-success"><i class="fa fa-circle font-10 mr-2 "></i>Open
                                                    Rate</h6>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <h6 class="text-info"><i class="fa fa-circle font-10 mr-2"></i>Recurring
                                                    Payments</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="campaign ct-charts"></div>
                                <div class="row text-center">
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h1 class="mb-0 font-weight-light">5098</h1><small>Total Sent</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h1 class="mb-0 font-weight-light">4156</h1><small>Mail Open Rate</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h1 class="mb-0 font-weight-light">1369</h1><small>Click Rate</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mr-3 align-self-center">
                                        <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title text-white">Bandwidth usage</h3>
                                        <h6 class="card-subtitle text-white op-5">March 2020</h6>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-weight-light text-white text-nowrap">50 GB</h2>
                                    </div>
                                    <div class="col-8 pb-3 pt-2 align-self-center">
                                        <div class="usage chartist-chart" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mr-3 align-self-center">
                                        <h1 class="text-white"><i class="icon-cloud-download"></i></h1>
                                    </div>
                                    <div>
                                        <h3 class="card-title text-white">Download count</h3>
                                        <h6 class="card-subtitle text-white op-5">March 2020</h6>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-4 align-self-center">
                                        <h2 class="font-weight-light text-white text-nowrap text-truncate">35487</h2>
                                    </div>
                                    <div class="col-8 pb-3 pt-2 text-right">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <img class="rounded-top" src="../assets/images/background/weatherbg.jpg"
                                alt="Card image cap">
                            <div class="card-img-overlay" style="height:110px;">
                                <div class="d-flex align-items-center">
                                    <h3 class="card-title text-white mb-0 d-inline-block">New Delhi</h3>
                                    <div class="ml-auto">
                                        <small class="card-text text-white font-weight-light">Sunday 15
                                            march</small>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 weather-small">
                                <div class="row">
                                    <div class="col-8 border-right align-self-center">
                                        <div class="d-flex">
                                            <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                                            <div class="ml-3">
                                                <h1 class="font-weight-light text-info mb-0">32<sup>0</sup></h1>
                                                <small>Sunny Rainy day</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h1 class="font-weight-light mb-0">25<sup>0</sup></h1>
                                        <small>Tonight</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top w-100 profile-bg-height"
                                src="../assets/images/background/profile-bg.jpg" alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="user"
                                        class="rounded-circle shadow-sm" width="128" /></div>
                                <h3 class="mb-0">Angela Dominic</h3>
                                <p>Web Designer &amp; Developer</p>
                                <a href="javascript:void(0)"
                                    class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                                <div class="row text-center mt-3 justify-content-center">
                                    <div class="col-6 col-md-4 mt-3">
                                        <h3 class="mb-0 font-weight-light">1099</h3><small>Articles</small>
                                    </div>
                                    <div class="col-6 col-md-4 mt-3">
                                        <h3 class="mb-0 font-weight-light">23,469</h3><small>Followers</small>
                                    </div>
                                    <div class="col-6 col-md-4 mt-3">
                                        <h3 class="mb-0 font-weight-light">6035</h3><small>Following</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body bg-info rounded-top">
                                <h4 class="text-white card-title">My Contacts</h4>
                                <h6 class="card-subtitle text-white mb-0 op-5">Checkout my contacts here</h6>
                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box position-relative">
                                    <h2 class="add-ct-btn position-absolute"><button type="button"
                                            class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button>
                                    </h2>
                                    <div class="message-widget contact-widget position-relative">
                                        <!-- Message -->
                                        <a href="#" class="py-3 px-2 border-bottom d-flex align-items-center text-decoration-none">
                                            <div class="user-img position-relative d-inline-block mr-2"> <img
                                                    src="../assets/images/users/1.jpg" alt="user"
                                                    class="rounded-circle w-100">
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                            </div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="my-1">Pavan kumar</h5> <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">info@wrappixel.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="py-3 px-2 border-bottom d-flex align-items-center text-decoration-none">
                                            <div class="user-img position-relative d-inline-block mr-2"> <img
                                                    src="../assets/images/users/2.jpg" alt="user"
                                                    class="rounded-circle w-100">
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-danger rounded-circle"></span>
                                            </div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="my-1">Sonu Nigam</h5> <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">pamela1987@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="py-3 px-2 border-bottom d-flex align-items-center text-decoration-none">
                                            <div class="user-img position-relative d-inline-block mr-2"> <span
                                                    class="round text-white d-inline-block text-center rounded-circle bg-info">A</span>
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                            </div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="my-1">Arijit Sinh</h5> <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">cruise1298.fiplip@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="py-3 px-2 d-flex align-items-center text-decoration-none">
                                            <div class="user-img position-relative d-inline-block mr-2"> <img
                                                    src="../assets/images/users/4.jpg" alt="user"
                                                    class="rounded-circle w-100">
                                                <span
                                                    class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                            </div>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="my-1">Pavan kumar</h5> <span
                                                    class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">kat@gmail.com</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"
                                        role="tab"><span class="d-none d-md-block">Activity</span><span class="d-block d-md-none"><i class="mdi mdi-bulletin-board"></i></span></a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
                                        role="tab"><span class="d-none d-md-block">Profile</span><span class="d-block d-md-none"><i class="mdi mdi-face-profile"></i></a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings"
                                        role="tab"><span class="d-none d-md-block">Settings</span><span class="d-block d-md-none"><i class="mdi mdi-settings"></i></a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline position-relative">
                                            <div class="sl-item mt-2 mb-3">
                                                <div class="sl-left float-left mr-3"> <img
                                                        src="../assets/images/users/1.jpg" alt="user"
                                                        class="rounded-circle"> </div>
                                                <div class="sl-right">
                                                    <div>
                                                        <div class="d-md-flex">
                                                            <h5 class="mb-0 font-weight-light">
                                                                <a href="#" class="link">John Doe</a>
                                                            </h5>
                                                            <span class="sl-date text-muted ml-1">5 minutes ago</span>
                                                        </div>

                                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img1.jpg" alt="user"
                                                                    class="img-fluid rounded"></div>
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img2.jpg" alt="user"
                                                                    class="img-fluid rounded"></div>
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img3.jpg" alt="user"
                                                                    class="img-fluid rounded"></div>
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img4.jpg" alt="user"
                                                                    class="img-fluid rounded"></div>
                                                        </div>
                                                        <div class="text-nowrap"> 
                                                            <a href="javascript:void(0)" class="link mr-2">2 comment</a> 
                                                            <a href="javascript:void(0)" class="link mr-2"><i class="fa fa-heart text-danger"></i> 5 Love</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item mt-2 mb-3">
                                                <div class="sl-left float-left mr-3"> <img
                                                        src="../assets/images/users/2.jpg" alt="user"
                                                        class="rounded-circle"> </div>
                                                <div class="sl-right">
                                                    <div>
                                                        <div class="d-md-flex">
                                                            <h5 class="mb-0 font-weight-light"><a href="#"
                                                                    class="link">John Doe</a></h5>
                                                            <span class="sl-date text-muted ml-1">5
                                                                minutes ago</span>
                                                        </div>
                                                        <div class="mt-3 row">
                                                            <div class="col-md-3 col-xs-12"><img
                                                                    src="../assets/images/big/img1.jpg" alt="user"
                                                                    class="img-fluid rounded"></div>
                                                            <div class="col-md-9 col-xs-12 mt-3 mt-md-0">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Integer nec odio. Praesent libero. Sed cursus
                                                                    ante dapibus diam. </p> <a href="#"
                                                                    class="btn btn-success">
                                                                    Design weblayout</a>
                                                            </div>
                                                        </div>
                                                        <div class="text-nowrap mt-3"> <a href="javascript:void(0)"
                                                                class="link mr-2">2 comment</a> <a
                                                                href="javascript:void(0)" class="link mr-2"><i
                                                                    class="fa fa-heart text-danger"></i>
                                                                5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item mt-2 mb-3">
                                                <div class="sl-left float-left mr-3"> <img
                                                        src="../assets/images/users/3.jpg" alt="user"
                                                        class="rounded-circle"> </div>
                                                <div class="sl-right">
                                                    <div>
                                                        <div class="d-md-flex">
                                                            <h5 class="mb-0 font-weight-light"><a href="#"
                                                                    class="link">John Doe</a></h5>
                                                            <span class="sl-date text-muted ml-1">5
                                                                minutes ago</span>
                                                        </div>
                                                        <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Integer nec odio. Praesent libero. Sed
                                                            cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                                                            elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                                                            Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="text-nowrap mt-3"> <a href="javascript:void(0)"
                                                            class="link mr-2">2
                                                            comment</a> <a href="javascript:void(0)"
                                                            class="link mr-2"><i class="fa fa-heart text-danger"></i>
                                                            5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item mt-2 mb-3">
                                                <div class="sl-left float-left mr-3"> <img
                                                        src="../assets/images/users/4.jpg" alt="user"
                                                        class="rounded-circle"> </div>
                                                <div class="sl-right">
                                                    <div>
                                                        <div class="d-md-flex">
                                                            <h5 class="mb-0 font-weight-light"><a href="#"
                                                                    class="link">John Doe</a></h5>
                                                            <span class="sl-date text-muted ml-1">5
                                                                minutes ago</span>
                                                        </div>
                                                        <blockquote class="mt-2">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 border-right"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="mt-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                            Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                            Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
                                            ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium mt-4">Skill Set</h4>
                                        <hr>
                                        <h5 class="mt-4">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="mt-4">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="mt-4">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="mt-4">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com"
                                                        class="form-control form-control-line" name="example-email"
                                                        id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5"
                                                        class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2020 Material Pro Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab"
                        aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false"><i
                            class="mdi mdi-star-circle font-20"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>
                        <div class="checkbox checkbox-info mt-3">
                            <input type="checkbox" name="theme-view" class="material-inputs" id="theme-view">
                            <label for="theme-view"> <span>Dark Theme</span> </label>
                        </div>
                        <div class="checkbox checkbox-info mt-2">
                            <input type="checkbox" class="sidebartoggler material-inputs" name="collapssidebar" id="collapssidebar">
                            <label for="collapssidebar"> <span>Collapse Sidebar</span> </label>
                        </div>
                        <div class="checkbox checkbox-info mt-2">
                            <input type="checkbox" name="sidebar-position" class="material-inputs" id="sidebar-position">
                            <label for="sidebar-position"> <span>Fixed Sidebar</span> </label>
                        </div>
                        <div class="checkbox checkbox-info mt-2">
                            <input type="checkbox" name="header-position" class="material-inputs" id="header-position">
                            <label for="header-position"> <span>Fixed Header</span> </label>
                        </div>
                        <div class="checkbox checkbox-info mt-2">
                            <input type="checkbox" name="boxed-layout" class="material-inputs" id="boxed-layout">
                            <label for="boxed-layout"> <span>Boxed Layout</span> </label>
                        </div> 
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin1"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin2"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin3"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin4"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin5"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin1"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin2"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin3"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin4"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin5"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin6"></a></li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin1"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin2"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin3"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin4"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin5"></a></li>
                            <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_1' data-user-id='1'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_2' data-user-id='2'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_3' data-user-id='3'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_4' data-user-id='4'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_5' data-user-id='5'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_6' data-user-id='6'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_7' data-user-id='7'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_8' data-user-id='8'>
                                    <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                    <div class="w-75 d-inline-block v-middle pl-2">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user"
                                    src="../assets/images/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
@endsection