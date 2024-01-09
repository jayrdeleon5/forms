<?php  include('session.php'); ?>
<?php  include('header.php'); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  
  <?php  include('navbar.php'); ?>
  <?php  include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Sections</h1>
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
                <h3 class="card-title">List of All Sections</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Section ID</th>
					<th>Section</th>
					<th>Action</th>
                  </tr>
                  </thead>
                  <?php
$conn = mysqli_connect('localhost','root','','deped');
if(!$conn){
    echo "Database Connection Failed. Error: ". mysqli_error($conn);
}
?>
                  <?php
$query = "SELECT * FROM sections";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sid'] . "</td>";
    echo "<td>" . $row['sections'] . "</td>";
    echo "<td>View Section</td>";

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