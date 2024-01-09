<?php $query= mysqli_query($conn,"select * from users where user_id = '$session_id'")or die(mysqli_error($conn));
$row = mysqli_fetch_array($query);?>
						
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        <li class="nav-item d-none d-sm-inline-block">
       <a href="dashboard.php" class="nav-link">Welcome, Administrator Panel! </a>

      </li>
      
    </ul>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
       
      <li class="nav-item">
        <a href="msections.php" class="nav-link">Manage Sections</a>
      </li>
     <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->