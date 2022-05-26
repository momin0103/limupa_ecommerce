<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('/')}}admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('/')}}admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('/')}}admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="{{asset('/')}}admin/vendor/summernote/summernote-bs4.min.css" rel="stylesheet" >
    <!-- Main CSS-->
    <link href="{{asset('/')}}admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('/')}}admin/images/icon/logo.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>DASHBOARD</a>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>Category Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('add-category')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{route('manage-category')}}">Manage Category</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>Sub Category Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('add-sub-category')}}">Add Sub Category</a>
                            </li>
                            <li>
                                <a href="{{route('manage-sub-category')}}">Manage Sub Category</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>Brand Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('add-brand')}}">Add Brand</a>
                            </li>
                            <li>
                                <a href="{{route('manage-brand')}}">Manage Brand</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>Unit Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('add-unit')}}">Add Unit</a>
                            </li>
                            <li>
                                <a href="{{route('manage-unit')}}">Manage Unit</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>Product Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('add-product')}}">Add Product</a>
                            </li>
                            <li>
                                <a href="{{route('manage-product')}}">Manage Product</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>Order Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('admin-manage-order')}}">Manage Order</a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>User Module</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{route('add-admin-user')}}">Add User</a>
                            </li>
                            <li>
                                <a href="{{route('manage-admin-user')}}">Manage User</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-comment-more"></i>
                                    <span class="quantity">1</span>
                                    <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="{{asset('/')}}admin/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                            </div>
                                            <div class="content">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class="time">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="{{asset('/')}}admin/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                            </div>
                                            <div class="content">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mess__footer">
                                            <a href="#">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>
                                    <span class="quantity">1</span>
                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="{{asset('/')}}admin/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="{{asset('/')}}admin/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="{{asset('/')}}admin/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{asset('/')}}admin/images/icon/momin.jpg" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{asset('/')}}admin/images/icon/momin.jpg" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{Auth::user()->name}}</a>
                                                </h5>
                                                <span class="email">{{Auth::user()->email}}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{route('admin-change-parssword')}}"><i class="zmdi zmdi-power"></i>Change Password</a>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="zmdi zmdi-power"></i>Logout</a>

                                            <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                   @yield('body')


                </div>
            </div>
        </div>

</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="">
            <p class="text-center text-dark">Copyright © 2022 Colorlib. All rights reserved. Create By <b><i>Md. Abdullah Al Momin.</i></b></p>
        </div>
    </div>
</div>
<!-- Jquery JS-->
<script src="{{asset('/')}}admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{asset('/')}}admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{asset('/')}}admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{asset('/')}}admin/vendor/slick/slick.min.js">
</script>
<script src="{{asset('/')}}admin/vendor/wow/wow.min.js"></script>
<script src="{{asset('/')}}admin/vendor/animsition/animsition.min.js"></script>
<script src="{{asset('/')}}admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{asset('/')}}admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{asset('/')}}admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{asset('/')}}admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('/')}}admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{asset('/')}}admin/vendor/select2/select2.min.js">
</script>
<script src="{{asset('/')}}admin/vendor/summernote/summernote-bs4.min.js"></script>
<!-- Main JS-->
<script src="{{asset('/')}}admin/js/main.js"></script>
<script>
    $('.summernote').summernote();
</script>
<script>
    function getSubCategory(id)
    {
        $.ajax({
            method: 'GET',
            url: '{{url("get-sub-category-by-category")}}',
            data: {id: id},
            dataType: 'JSON',
            success: function (response) {

                console.log(response);

                var subCategorySelect = $('#subCategoryId');
                subCategorySelect.empty();

                var option = '';

                option += '<option value="">---Select Your Sub Category Name---</option>';
                $.each(response, function (key, value) {
                    option += '<option value="'+value.id+'">'+value.name+'</option>';
                });
                subCategorySelect.append(option);
            }
        });
    }
</script>
</body>

</html>
<!-- end document-->
