<?php  include('session.php'); ?>
<?php  include('header.php'); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
   <?php  $section=$_GET['section']; ?>
  
  
  <?php  include('navbar.php'); ?>
  <?php  include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SF1 - Learners Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  <th colspan="18"> <h3 class="card-title">List of Learners - <?php  echo "<b>$section</b>"; ?> </h3></th>
				  </tr>
				  <tr>
                    <th>LRN</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Gender</th>
					<th>Birthdate</th>
					<th>Age</th>
					<th>Street</th>
					<th>Barangay</th>
					<th>Municipality</th>
					<th>Province</th>
					<th>Father</th>
					<th>Mother</th>
					<th>Guardian</th>
					<th>Relationship</th>
					<th>Contact</th>
          <th>Actions</th>
                  </tr>
                  </thead>
                  <?php
$conn = mysqli_connect('localhost','root','','deped');
if(!$conn){
    echo "Database Connection Failed. Error: ". mysqli_error($conn);
}
?>
                  <?php
$query = "SELECT * FROM learners where section='$section'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['lrn'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['middlename'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['birthdate'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['street'] . "</td>";
    echo "<td>" . $row['barangay'] . "</td>";
    echo "<td>" . $row['municipality'] . "</td>";
    echo "<td>" . $row['province'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['mname'] . "</td>";
    echo "<td>" . $row['gname'] . "</td>";
    echo "<td>" . $row['relationship'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
 echo " <td class='project-actions text-center'>
                          
                          <a class='btn btn-info btn-sm' href='#''>
                              <i class='fas fa-pencil-alt'>
                              </i>
                              Edit
                          </a>
                          <a class='btn btn-danger btn-sm' href='#''>
                              <i class='fas fa-trash'>
                              </i>
                              Delete
                          </a>
                      </td>";
    echo "</tr>";
}


?>		
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
   
   
   
  </div>
  <!-- /.content-wrapper -->
	  <?php  include('footer.php'); ?>
  <?php  include('footer2.php'); ?>