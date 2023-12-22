<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Lankan Hydoponic </title>
    <link href="<?php echo e(asset('webSiteImages/logonew.jpg')); ?>" rel="icon">
    <meta name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard/vendor.css')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Theme initialization -->
    <link rel="stylesheet" id="theme-style" href="<?php echo e(asset('css/dashboard/app.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/dashboard/cusDashboardMeeter.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dashboard/tableCuss.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" id="theme-style_s" href="<?php echo e(asset('css/dashboard/app-green.css')); ?>">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="<?php echo e(asset('js/hidediv.js')); ?>"></script>



    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <header class="header">
                <div class="header-block header-block-collapse d-lg-none d-xl-none">
                    <button class="collapse-btn" id="sidebar-collapse-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="header-block header-block-search">
                    <form role="search">
                        <div class="input-container">
                            <i class="fa fa-search"></i>
                            <input type="search" placeholder="Search">
                            <div class="underline"></div>
                        </div>
                    </form>
                </div>
                <div class="header-block header-block-buttons">
                </div>
                <div class="header-block header-block-nav">
                    <ul class="nav-profile">
                        <li class="notifications new">
                            <a href="" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <sup>
                                    <span class="counter">8</span>
                                </sup>
                            </a>
                            <div class="dropdown-menu notifications-dropdown-menu">
                                <ul class="notifications-container">
                                    <li>
                                        <a href="" class="notification-item">
                                            <div class="img-col">
                                                <div class="img" style="background-image: url('assets/faces/3.jpg')">
                                                </div>
                                            </div>
                                            <div class="body-col">
                                                <p>
                                                    <span class="accent">Zack Alien</span> pushed new commit: <span
                                                        class="accent">Fix page load performance issue</span>. </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="notification-item">
                                            <div class="img-col">
                                                <div class="img" style="background-image: url('assets/faces/5.jpg')">
                                                </div>
                                            </div>
                                            <div class="body-col">
                                                <p>
                                                    <span class="accent">Amaya Hatsumi</span> started new task: <span
                                                        class="accent">Dashboard UI design.</span>. </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="notification-item">
                                            <div class="img-col">
                                                <div class="img" style="background-image: url('assets/faces/8.jpg')">
                                                </div>
                                            </div>
                                            <div class="body-col">
                                                <p>
                                                    <span class="accent">Andy Nouman</span> deployed new version of
                                                    <span class="accent">NodeJS REST Api V3</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer>
                                    <ul>
                                        <li>
                                            <a href=""> View All </a>
                                        </li>
                                    </ul>
                                </footer>
                            </div>
                        </li>
                        <li class="profile dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="img" style="background-image: url('<?php echo e(asset(Auth::user()->avatar)); ?>')">
                                </div>

                                <span class="name"> <?php echo e(Auth::user()->name); ?> </span>
                            </a>
                            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="/returnEditProfileAdmin">
                                    <i class="fa fa-user icon"></i> Profile </a>
                                <a class="dropdown-item" href="/returnEditPasswordAdmin">
                                    <i class="fa fa-key icon"></i> Password </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off icon"></i> <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class="sidebar">
                <div class="sidebar-container">
                    <div class="sidebar-header">
                        <div class="brand">
                            <a href="/" style="text-decoration: none;  color: inherit;">


                                <div class="logo">
                                    <span class="l l1"></span>
                                    <span class="l l2"></span>
                                    <span class="l l3"></span>
                                    <span class="l l4"></span>
                                    <span class="l l5"></span>
                                </div>Lankan Hydroponic
                            </a>



                            <br>


                        </div>
                    </div>


                    <nav class="menu">
                        <ul class="sidebar-menu metismenu" id="sidebar-menu">
                            <li class="active">
                                <a href="/admin">
                                    <i class="fa fa-home"></i> Dashboard </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-th-large"></i> Manage Users <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="/adminAddUesr"> Add Users </a>
                                    </li>
                                    <li>
                                        <a href="/manageUsersTbl">Manage Users</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-area-chart"></i> Charts <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="/adminMeterIndex">Meters</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Manage Items <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="/addItemsAdmin"> Add Items </a>
                                    </li>
                                    <li>
                                        <a href="/manageItemsAdmin"> Manage Items </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/updateWebImages">
                                    <i class="fa fa-pencil-square-o"></i> Web Images </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-desktop"></i>Task Management <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav">
                                    <li>
                                        <a href="/showTask"><i class="fa fa-tasks" aria-hidden="true"></i> My Task </a>
                                    </li>
                                </ul>
                            </li>
                            <li>

                        </ul>
                    </nav>
                </div>
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li>
                                                    <span class="color-item color-red" data-theme="red"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-orange" data-theme="orange"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-green " data-theme="green"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                                </li>
                                                <li>
                                                    <span class="color-item color-blue" data-theme="blue"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <script>
                                        $(document).ready(function () {
                                            // Function to set the selected theme
                                            function setSelectedTheme(theme) {
                                                localStorage.setItem('selectedTheme', theme);
                                            }

                                            // Function to get the selected theme
                                            function getSelectedTheme() {
                                                return localStorage.getItem('selectedTheme');
                                            }

                                            // Function to update the theme on page load
                                            function updateThemeOnLoad() {
                                                var selectedTheme = getSelectedTheme();
                                                if (selectedTheme) {
                                                    $('#theme-style_s').attr('href', '<?php echo e(asset("css/dashboard/app-")); ?>' + selectedTheme + '.css');
                                                    $('.color-item').removeClass('active');
                                                    $('.color-item[data-theme="' + selectedTheme + '"]').addClass('active');
                                                }
                                            }

                                            // Attach click event to color items
                                            $('.color-item').on('click', function () {
                                                var selectedTheme = $(this).data('theme');

                                                // Update the href attribute of the stylesheet link
                                                $('#theme-style_s').attr('href', '<?php echo e(asset("css/dashboard/app-")); ?>' + selectedTheme + '.css');

                                                // Save the selected theme
                                                setSelectedTheme(selectedTheme);

                                                // Optional: Update the 'active' class for styling purposes
                                                $('.color-item').removeClass('active');
                                                $(this).addClass('active');
                                            });

                                            // Update the theme on page load
                                            updateThemeOnLoad();
                                        });
                                    </script>
                                </ul>
                                <a href="">
                                    <i class="fa fa-cog"></i> Customize </a>
                            </li>
                        </ul>
                    </footer>
            </aside>
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
            <div class="mobile-menu-handle"></div>
            <article class="content dashboard-page" >

                <section class="section">
                    <div class="row sameheight-container">
                        <div class="col col-12 col-sm-12 col-md-12 col-xl-12 stats-col">
                            <div class="card sameheight-item stats" data-exclude="xs">
                                <div class="card-block" style="background-color: rgb(58,70,81)">
                                    <div class="title-block">
                                        
                                        </p>
                                    </div>
                                    <div class="row row-sm stats-container" style="background-color: rgb(58,70,81)">
                                        <main class="" >
                                            <?php echo $__env->yieldContent('content'); ?>




                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <div class="modal fade" id="modal-media">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Media Library</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body modal-tab-container">
                            <ul class="nav nav-tabs modal-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                </li>
                            </ul>
                            <div class="tab-content modal-tab-content">
                                <div class="tab-pane fade" id="gallery" role="tabpanel">
                                    <div class="images-container">
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                    <div class="upload-container">
                                        <div id="dropzone">
                                            <form action="/" method="POST" enctype="multipart/form-data"
                                                class="dropzone needsclick dz-clickable" id="demo-upload">
                                                <div class="dz-message-block">
                                                    <div class="dz-message needsclick"> Drop files here or click to
                                                        upload. </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Insert Selected</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="confirm-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure want to do this?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-80463319-4', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="<?php echo e(asset('js/dashboard/vendor.js')); ?>"></script>

    <script src="<?php echo e(asset('js/dashboard/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\New folder\Final_Hydroponic_Farm\resources\views/layouts/admin.blade.php ENDPATH**/ ?>