   <!DOCTYPE html>
   <html lang="en">

   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>



     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion $zindex:10;" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
           <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">LEGAL <sup>PATH</sup></div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
         <a class="nav-link" href="../index.php">
           <i class="fas fa-fw fa-tachometer-alt"></i>
           <span>Dashboard</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
         <a class="nav-link collapsed" href="../hero.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
           <i class="fas fa-fw fa-cog"></i>
           <span>Hero</span>
         </a>





       <li class="nav-item">
         <a class="nav-link" href="../about.php">
           <i class="fas fa-fw fa-chart-area"></i>
           <span>About Us</span></a>
       </li>


       <li class="nav-item">
         <a class="nav-link" href="../register.php">
           <i class="fas fa-fw fa-chart-area"></i>
           <span>Services</span></a>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="../team.php">
           <i class="fas fa-solid fa-people-group"></i>
           <span>Team</span></a>
       </li>



       <li class="nav-item">
         <a class="nav-link" href="../admin/update/blog.php">
           <i class="fas fa-fw fa-chart-area"></i>
           <span>Latest news</span></a>
       </li>


       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
           <i class="fas fa-fw fa-folder"></i>
           <span>Pages</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item" href="login.html">Login</a>
             <a class="collapse-item" href="register.html">Register</a>
             <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
             <div class="collapse-divider"></div>
             <a class="collapse-item" href="404.html">404 Page</a>
             <a class="collapse-item" href="blank.html">Blank Page</a>
           </div>
         </div>
       </li>


       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

     </ul>
     <!-- End of Sidebar -->

     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">

       <!-- Main Content -->
       <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

           <!-- Sidebar Toggle (Topbar) -->
           <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
             <i class="fa fa-bars"></i>
           </button>

           <!-- Topbar Search -->
           <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
           <ul class="navbar-nav ml-auto">


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
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                   ADMIN

                 </span>
                 <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
               </a>
               <!-- Dropdown - User Information -->
               <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="#">
                   <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                   Profile
                 </a>
                 <a class="dropdown-item" href="#">
                   <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                   Settings
                 </a>
                 <a class="dropdown-item" href="#">
                   <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                   Activity Log
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                   Logout
                 </a>
               </div>
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