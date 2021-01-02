<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('head')

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <!--                        <a href="index.html">-->
                    <!--                            <b class="logo-icon">-->
                    <!--                                &lt;!&ndash; Dark Logo icon &ndash;&gt;-->
                    <!--                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />-->
                    <!--                                &lt;!&ndash; Light Logo icon &ndash;&gt;-->
                    <!--                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />-->
                    <!--                            </b>-->
                    <!--                            &lt;!&ndash;End Logo icon &ndash;&gt;-->
                    <!--                            &lt;!&ndash; Logo text &ndash;&gt;-->
                    <!--                            <span class="logo-text">-->
                    <!--                                &lt;!&ndash; dark Logo text &ndash;&gt;-->
                    <!--                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />-->
                    <!--                                &lt;!&ndash; Light Logo text &ndash;&gt;-->
                    <!--                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                    <!--                            </span>-->
                    <!--                        </a>-->
                </div>
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
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">

                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                            <form>
                                <div class="customize-input">
                                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                           type="search" placeholder="Search" aria-label="Search">
                                    <i class="form-control-icon" data-feather="search"></i>
                                </div>
                            </form>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                 width="40">
                            <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                    class="text-dark">Profile name</span> <i data-feather="chevron-down"
                                                                             class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                    Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
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
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('home'))}}
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span></a></li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Departments</span></li>

                    <li class="sidebar-item"> <a class="sidebar-link" href={{(('sales'))}}
                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                class="hide-menu">Sales Tasks
                                </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('three_d'))}}
                            aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                class="hide-menu">3D Tasks</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('marketing'))}}
                            aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                class="hide-menu">Marketing Tasks</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('engineering'))}}
                            aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                class="hide-menu">Engineering Tasks</span></a></li>

                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Others</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('report'))}}
                            aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                class="hide-menu">Daily report</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('todo_list'))}}
                            aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                class="hide-menu">TODO</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('profile'))}}
                            aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                class="hide-menu">Profile</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href={{(('logout'))}}
                            aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                class="hide-menu">Logout</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
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
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Sales</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="" class="text-muted">Apps</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Sales</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="customize-input float-right">
                        <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                            <option selected>Aug 19</option>
                            <option value="1">July 19</option>
                            <option value="2">Jun 19</option>
                        </select>
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
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="col-8">
                            <h2 class="mb-0 ">Received Tasks </h2>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>task title</th>
                                        <th>assigned by</th>
                                        <th>assigned to</th>
                                        <th>task status</th>
                                        <th>description</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($todo_list as $details)
                                        <tr class="details{{$details->id}}">
                                            <td> <button class="btn">
                                                    <span class="fa fa-eye"></span>
                                                </button></td>
                                            <td >
                                                <button id="btn"  class="btn btn-info" data-info="{{$details->task_status}}">
                                                    <span   class="fa fa-clipboard-check"></span>
                                                </button>
                                            </td>
                                            <td>{{$details->task_title}}</td>
                                            <td><a href="javascript:void(0)" class="font-weight-medium link">{{$details->assigned_by}}</a></td>
                                            <td><a href="javascript:void(0)" class="font-bold link">{{$details->assigned_to}}</a></td>
                                            <td>{{$details->task_status}}</td>
                                            <td>{{$details->description}}</td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-8">
                                <h2 class="mb-0 ">Given Tasks </h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>task title</th>
                                        <th>assigned by</th>
                                        <th>assigned to</th>
                                        <th>task status</th>
                                        <th>description</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($todo_list_given as $details1)
                                        <tr class="details{{$details1->id}}">
                                            <td> <button type="submit" class="btn">
                                                    <span  class="fa fa-eye"></span>
                                                </button></td>
                                            <td>{{$details1->task_title}}</td>
                                            <td><a href="javascript:void(0)" class="font-weight-medium link">{{$details1->assigned_by}}</a></td>
                                            <td><a href="javascript:void(0)" class="font-bold link">{{$details1->assigned_to}}</a></td>
                                            <td>{{$details1->task_status}}</td>
                                            <td>{{$details1->description}}</td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

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
        <footer class="footer text-center text-muted">
            All Rights Reserved by Me. Designed and Developed by <a
                href="">Me</a>.
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
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
@include('Script/script')


</body>
<script>



    $(document).ready(function() {
        $('#example').DataTable();
    } );
    $(document).ready(function() {
        $('#example2').DataTable({
        });
    } );
function productUpdate(){

}

    $('#example tbody').on('click', function () {
        const table = $('#example').DataTable();
        const data = table.cell( 0,5 ).data();
        const url = '{{route('complete')}}';
        // alert(data)


        $.ajax({
            type: 'post',
            url: url,
            data: {
                task_status: data, _token: '{{csrf_token()}}'
            },
            error:function(data) {
                console.log('ERROR');
            }

        });

    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


</script>
</html>
