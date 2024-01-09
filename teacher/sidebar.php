
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="images/deped.png" alt="" height ="50" width="80" style="opacity: .8">
      <span class="brand-text font-weight-light">School Forms</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['name'];  ?></a>
        </div>
      </div>
	  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="viewlearnerssf1.php?section=<?php echo $row['section'];  ?>" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
              <p>
                SF1 - Learners' Profile
               
              </p>
            </a>
            
          </li>


         <li class="nav-item">
             <a href="viewlearnerssf2.php?section=<?php echo $row['section'];  ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                SF2 - Daily Attendance
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
             <a href="viewlearnerssf3.php?section=<?php echo $row['section'];  ?>" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               SF3 - Books and Returned
              </p>
            </a>
            
          </li>
         
          <li class="nav-item">
            <a href="viewlearnerssf4.php?section=<?php echo $row['section'];  ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                SF4 - Summary of Monthly Attendance 				
              </p>
            </a>
            
          </li>
         
		 
          <li class="nav-item">
             <a href="viewlearnerssf5.php?section=<?php echo $row['section'];  ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                SF5 - Promotion per section
              </p>
            </a>
        
          </li>
        
		  
          <li class="nav-item">
             <a href="viewlearnerssf8.php?section=<?php echo $row['section'];  ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                SF8 - Nutrition Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="viewlearnerssf9.php?section=<?php echo $row['section'];  ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                SF9 -  Form 138
              </p>
            </a>
          </li>
          
         
      </nav>
      <!-- /.sidebar-menu -->
	      </div>
    <!-- /.sidebar -->
  </aside>