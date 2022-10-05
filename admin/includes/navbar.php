

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <?php include 'links/links.php'; ?>
</head>

<body>



  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary position-sticky   sidebar sidebar-dark accordion $zindex-fixed:1030;" id="accordionSidebar">
    <div class="sticky-top ">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">QUESTION <sup>BANK</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active ">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">




      <li class="nav-item">
        <a class="nav-link" href="data_entry.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Entry</span></a>
      </li>




      <li class="nav-item">
        <a class="nav-link" href="courses.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Courses</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="subject.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Subjects</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="questions.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Questions</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="search.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>search database</span></a>
      </li>







      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline m-5">
        <button class="rounded-circle border-0 " id="sidebarToggle"></button>
      </div>


    </div>
  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column ">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->

      <nav class="navbar   navbar-expand navbar-light bg-white topbar mb-4 sticky-top  shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  pl-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto ">


          <!-- Nav Item - Alerts -->
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              <!-- Counter - Alerts -->
              <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->

            <!-- Nav Item - Messages -->
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope fa-fw"></i>
              <!-- Counter - Messages -->
              <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->

            <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="btn btn-danger mt-2" href="logout.php">LOGOUT</a>
          </li>

        </ul>

      </nav>

      <!-- End of Topbar -->


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>


      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

              <form action="logout.php" method="POST">

                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

              </form>


            </div>
          </div>
        </div>
      </div>




</body>

</html>