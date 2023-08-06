<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
   <a class="navbar-brand" href="#">
      <!-- show app name -->
   </a>
   <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
   </button>
   <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" id="language" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <!-- lang:id -->
            <i class="flag-icon flag-icon-id"></i>
            <!-- lang:en -->
            <!-- <i class="flag-icon flag-icon-gb"></i> -->
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language">
            <a class="dropdown-item" href="#">1st language</a>
            <a class="dropdown-item" href="#">2nd language</a>
            <a class="dropdown-item" href="#">etc...</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i>
            <!-- show username -->
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.html">Logout</a>
         </div>
      </li>
   </ul>
</nav>
