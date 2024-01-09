<?php
$conn = mysqli_connect('localhost','root','','deped');
if(!$conn){
    echo "Database Connection Failed. Error: ". mysqli_error($conn);
}
?>