<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jasa Fotografer dan Sewa Kamera</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('template/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('template/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('template/css/color_2.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('template/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('template/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('template/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_2">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('template/images/logo/logo_icon.png') }}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('template/images/layout_img/user_img.jpg') }}" alt="#" /></div>
                        <div class="user_info">
                           <h6>Ahmad Zikri</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Menu</h4>
                  <ul class="list-unstyled components">

                    <li>
                        <a href="/beranda"><i class="fa fa-home orange_color"></i> <span>Beranda</span></a>
                    </li>
                    <li>
                        <a href="/produk"><i class="fa fa-dropbox orange_color"></i> <span>Produk</span></a>
                    </li>
                    <li>
                        <a href="/kamera"><i class="fa fa-camera orange_color"></i> <span>Kamera</span></a>
                    </li>
                    <li>
                        <a href="/fotografer"><i class="fa fa-camera-retro orange_color"></i> <span>Fotografer</span></a>
                    </li>
                    <li>
                        <a href="/pesanan"><i class="fa fa-camera orange_color"></i> <span>Pesanan</span></a>
                    </li>
                    <li>
                        <a href="/"kerjasama><i class="fa fa-hand-peace-o orange_color"></i> <span>Kerja Sama</span></a>
                    </li>
                    <li>
                        <a href="/tentangkami"><i class="fa fa-users orange_color"></i> <span>Tentang Kami</span></a>
                    </li>

                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{ asset('template/images/logo/logo_black.png') }}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('template/images/layout_img/user_img.jpg') }}" alt="#" /><span class="name_user">Ahmad Zikri</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">Profil</a>
                                       <a class="dropdown-item" href="settings.html">Pengaturan</a>
                                       <a class="dropdown-item" href="help.html">Bantuan</a>
                                       <a class="dropdown-item" href="#"><span>Keluar</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->

               <div class="midde_cont">
                  <div class="container-fluid">
                    @yield('content')

                  </div>
                  <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>
                                <a class="mx-3" href="#">
                                    <i class="fa fa-whatsapp"></i>
                                    082241880296
                                </a>
                                <a class="mx-3" href="#">
                                    <i class="fa fa-envelope-square"></i>
                                    jasfer@gmail.com
                                </a>
                                <a class="mx-3" href="#">
                                    <i class="fa fa-instagram"></i>
                                    jasfer_official
                                </a>
                                <a class="mx-3" href="#">
                                    <i class="fa fa-tiktok"></i>
                                    jasfer_official
                                </a>
                            </p>
                        </div>
                     </div>

               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->

      <script src="{{ asset('template/js/jquery.min.js') }}"></script>
      <script src="{{ asset('template/js/popper.min.js') }}"></script>
      <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('template/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('template/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('template/js/owl.carousel.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('template/js/Chart.min.js') }}"></script>
      <script src="{{ asset('template/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('template/js/utils.js') }}"></script>
      <script src="{{ asset('template/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('template/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('template/js/custom.js') }}"></script>
      <script src="{{ asset('template/js/chart_custom_style2.js') }}"></script>
   </body>
</html>
