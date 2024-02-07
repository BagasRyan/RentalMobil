<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from creatantech.com/demos/codervent/syndron/vertical/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Apr 2022 04:58:40 GMT -->
  <meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  />
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!--plugins-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/sweetalert/sweetalert2.min.css') }}" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

<!-- Theme Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />

    <title>Rental Mobil</title>
  </head>

  <body>
    <!--wrapper-->
    <div class="wrapper">
      <!--start header -->
      <!--start header wrapper-->
<header>
        <div class="topbar d-flex align-items-center">
          <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>
            <a href="{{ route('profile') }}" class="btn btn-secondary btn-sm"><i class="bx bx-user"></i>Profil Saya</a>
            <div class="top-menu ms-auto">
              <ul class="navbar-nav align-items-center">

                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="header-notifications-list">
                  </div>
 
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="header-message-list"></div>
                  </div>
              </ul>
              <form class="container" action="{{ route('logout') }}" method="POST">
                      @csrf      
                      <button class="btn btn-outline-danger btn-sm">Logout</button>
                </form>
            </div>
           
          </nav>
        </div>
      </header>
      <!-- Page wrapper end -->
      <!--end header -->
     <!--navigation-->
 <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <h6 class="logo-text">Rental Mobil</h6>
          </div>
          <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-to-left"></i>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
          <a href="{{ route('dashboard') }}">
              <div class="parent-icon"><i class="bx bx-home"></i></div>
              <div class="menu-title">Beranda</div>
            </a>
            </li>
          <li>
            <li>
            <a href="{{ route('my.car') }}">
                <div class="parent-icon"><i class="bx bx-car"></i></div>
                <div class="menu-title">Mobil Saya</div>
              </a>
            </li>
          <li>
          <a href="{{ route('my.rent.car') }}">
              <div class="parent-icon"><i class="bx bx-car"></i></div>
              <div class="menu-title">Mobil Sewaan Saya</div>
            </a>
          </li>
          <li>
          <a href="{{ route('create') }}">
              <div class="parent-icon"><i class="bx bx-plus"></i></div>
              <div class="menu-title">Sewa Mobilku</div>
            </a>
            </li>
        </ul>
        <!--end navigation-->
      </div>
      <!--end navigation-->

      <div class="page-wrapper">
        <div class="page-content">
          @yield('content')
        </div>
      </div>

      <!--start overlay-->
      <div class="overlay toggle-icon"></div>
      <!--end overlay-->
      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top"
        ><i class="bx bxs-up-arrow-alt"></i
      ></a>
      <!--End Back To Top Button-->
      <footer class="page-footer">
        <p class="mb-0">Copyright © 2024. All right reserved.</p>
      </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
      <div class="switcher-btn"><i class="bx bx-cog bx-spin"></i></div>
      <div class="switcher-body">
        <div class="d-flex align-items-center">
          <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
          <button
            type="button"
            class="btn-close ms-auto close-switcher"
            aria-label="Close"
          ></button>
        </div>
        <hr />
        <h6 class="mb-0">Theme Styles</h6>
        <hr />
        <div class="d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="lightmode"
              checked
            />
            <label class="form-check-label" for="lightmode">Light</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="darkmode"
            />
            <label class="form-check-label" for="darkmode">Dark</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="semidark"
            />
            <label class="form-check-label" for="semidark">Semi Dark</label>
          </div>
        </div>
      </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
<!--app JS-->
<script src="{{ asset('assets/js/app.js') }}"></script>


    @stack('script')
  </body>

  <!-- Mirrored from creatantech.com/demos/codervent/syndron/vertical/public/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Apr 2022 04:58:40 GMT -->
</html>
