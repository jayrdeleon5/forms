<?php  include('session.php'); ?>
<?php  include('header.php'); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  
  <?php  $lrn=$_GET['lrn']; ?>
  
  
  <?php  include('navbar.php'); ?>
 <?php  include('sidebar.php'); ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SF3 - Books and Returned</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
<div class="row">
          <div class="col-md-4">

          
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Book</h3>
              </div>
               <?php  include('add_book.php'); ?>
			  
            <!-- /.card -->

          </div>
          <!-- /.col (left) -->
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Book Details</h3>
              </div>
              <div class="card-body">
            
                <table id="example4" class="table table-bordered">
                  <thead>
                  
				  <tr>
					<th>Name of Book</th>
					<th>Date Issued</th>
					<th>Date Returned </th>
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
$query = "SELECT * FROM book where lrn='$lrn'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result)) {
	$lrn =  $row['lrn'] ;
    echo "<tr>";
    echo "<td>" . $row['book1'] . "</td>";
    echo "<td>" . $row['book1issued'] . "</td>";
    echo "<td>" . $row['book1returned'] . "</td>";
 echo " <td class='project-actions text-center'>
                          
                          <a class='btn btn-primary' href='bookreturned.php?lrn=$lrn'>
                              <i class='fas fa-pencil-alt'>
                              </i>
                              Update
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
          <!-- /.col (right) -->
        </div>
        
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
  </div>
  
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  
  <!-- /.content-wrapper -->
  
  	  <?php  include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
