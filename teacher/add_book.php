<?php  $lrn=$_GET['lrn']; ?>
<form method="post">
										
				<div class="card-body">
                <div class="form-group">
                    <label>LRN</label>
                    <input type="text" name="lrn" class="form-control" value="<?php  echo $lrn;?>" id="" placeholder="" >
                  </div>
				  
				   <div class="form-group">
                    <label>Book Name</label>
                    <input type="text" name="book1" class="form-control">
                  </div>
                  
				<div class="form-group">
                  <label>Date Issued:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="book1issued" class="form-control float-right">
                  </div>
                  <!-- /.input group -->
                </div>
				
				
				 <div class="form-group">
                  <label>Date Returned:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" class="form-control float-right" name="book1returned">
                  </div>
                  <!-- /.input group -->
                </div>
               <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-info">Add Book</button>
                  <button type="reset" class="btn btn-default float-right">Clear</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
</form>
								
					
					<?php
if (isset($_POST['save'])){
$lrn = $_POST['lrn'];
$book1 = $_POST['book1'];
$book1issued = $_POST['book1issued'];
$book1returned = $_POST['book1returned'];


$query = mysqli_query($conn,"select * from book where lrn = '$lrn' and book1 = '$book1' and book1issued = '$book1issued' and book1returned = '$book1returned' ")or die(mysqli_error($conn));
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into book (lrn,book1,book1issued,book1returned) values('$lrn','$book1','$book1issued','$book1returned')")or die(mysqli_error($conn));

?>
<script>
window.location = "bookreturned.php?lrn=<?php  echo $lrn;?>";
</script>
<?php
}
}
?>