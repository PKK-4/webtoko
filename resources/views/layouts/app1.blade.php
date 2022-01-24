<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BOOMBEST.net</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/app1/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/app1/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="/app1/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="asssets/images/favicon.ico" />
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper d-none d-lg-block">
        <a href="{{route('dashboard')}}" class="logo d-flex text-dark mt-3 mr-5 pr-5 text-start">
          <img class="w-25" src="{{asset('assets/img/logo.png')}}" alt="">
          <p class="pt-1">BOOMBEST.net</p>
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content justify-content-between">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>

          <a href="{{route('dashboard')}}" class="logo d-flex text-dark mr-5 pl-5 d-block d-lg-none float-left">
            <img class="w-25" src="{{asset('assets/img/logo.png')}}" alt="">
            <p class="pt-1">BOOMBEST.net</p>
          </a>
          {{-- <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form> --}}
          {{-- <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Notifications</h6>
                  <p class="dropdown-title-text">You have 4 unread notification</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                      <i class="mdi mdi-alert"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Storage Full</small>
                      <small class="content-text">Server storage almost full</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                      <i class="mdi mdi-cloud-upload"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Upload Completed</small>
                      <small class="content-text">3 Files uploded successfully</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                      <i class="mdi mdi-security"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Authentication Required</small>
                      <small class="content-text">Please verify your password to continue using cloud services</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-message-outline mdi-1x"></i>
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Messages</h6>
                  <p class="dropdown-title-text">You have 4 unread messages</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="/app1/images/profile/male/image_1.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Clifford Gordon</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="/app1/images/profile/female/image_2.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Rachel Doyle</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="/app1/images/profile/male/image_3.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-warning"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Lewis Guzman</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-apps mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Apps</h6>
                  <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                </div>
                <div class="dropdown-body border-top pt-0">
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                    <span class="grid-tittle">Jira</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                    <span class="grid-tittle">Trello</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                    <span class="grid-tittle">Artstation</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                    <span class="grid-tittle">Bitbucket</span>
                  </a>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
          </ul> --}}
        </div>
      </div>
    </nav>


    <!-- partial -->
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="display-avatar animated-avatar">
                <img class="profile-img img-lg rounded-circle" src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="profile image">
                </div>
                <div class="info-wrapper">
                <p class="user-name text-capitalize">{{ auth()->user()->role }}</p>
                <h6 class="display-income" style="font-size: 12px;">BOOMBEST.net</h6>
                </div>
            </div>
            <ul class="navigation-menu">
                <li class="nav-category-divider">MAIN</li>
                <li>
                <a href="{{ route('dashboard') }}">
                    <span class="link-title">Dashboard</span>
                    <i class="mdi mdi-gauge link-icon"></i>
                </a>
                </li>
                <li>
                <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                    <span class="link-title">Data Pegawai</span>
                    <i class="mdi mdi-account-check link-icon"></i>
                </a>
                <ul class="collapse navigation-submenu" id="sample-pages">
                    <li>
                    <a href="{{ route('tablepegawai') }}">Pegawai</a>
                    </li>
                    <li>
                    <a href="{{ route('tablecreator') }}">Creator</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
                    <span class="link-title">Daftar Member</span>
                    <i class="mdi mdi-bullseye link-icon"></i>
                </a>
                <ul class="collapse navigation-submenu" id="ui-elements">
                    <li>
                    <a href="pages/ui-components/buttons.html">Table Member</a>
                    </li>
                    <li>
                    <a href="pages/ui-components/tables.html">Table Poin</a>
                    </li>
                    <li>
                    <a href="pages/ui-components/tables.html">Toko Member</a>
                    </li>
                    <li>
                        <a href="pages/ui-components/tables.html">Produk Member</a>
                    </li>
                </ul>
                </li>
                <li>
                <a href="pages/forms/form-elements.html">
                    <span class="link-title">Pasang Iklan</span>
                    <i class="mdi mdi-clipboard-outline link-icon"></i>
                </a>
                </li>
                <li>
                    <a href="pages/charts/chartjs.html">
                        <span class="link-title">Tambah Merchant</span>
                        <i class="mdi mdi-chart-donut link-icon"></i>
                    </a>
                </li>
                <li>
                <a href="pages/charts/chartjs.html">
                    <span class="link-title">Tambah Kategori</span>
                    <i class="mdi mdi-chart-donut link-icon"></i>
                </a>
                </li>
            </ul>
            <div class="justify-content-center">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <ul><button type="submit" class="text-white btn btn-danger w-75"><i class="mdi mdi-logout"></i> Logout</button></ul>
                </form>
            </div>
        </div>
        <!--content-->
        @yield('content')
        <!--content-->

    </div>


    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="/app1/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="/app1/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/app1/vendors/chartjs/Chart.min.js"></script>
    <script src="/app1/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="/app1/js/template.js"></script>
    <script src="/app1/js/dashboard.js"></script>
    <!-- endbuild -->
    <!-- modal script -->
    <script>
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = 'New message to ' + recipient
        modalBodyInput.value = recipient
        })
    </script>
    <!-- modal script snd-->

    <script>

		function bacaGambar(input) {

			if (input.files && input.files[0]) {

				var reader = new FileReader();



				reader.onload = function (e) {

					$('#gambar_nodin').attr('src', e.target.result);

				}



				reader.readAsDataURL(input.files[0]);

			}

		}



		$("#preview_gambar").change(function(){

			bacaGambar(this);

		});

	</script>
  </body>
</html>
