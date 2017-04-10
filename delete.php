<?php

require_once 'config.php';
$query="SELECT * FROM `table_name`";
$results=mysqli_query($con, $query);

 
if(isset($_GET['id']) ){
    $id = $_GET['id'];  
$del="DELETE FROM `table_name` WHERE `id` ='{$id}'";
    
    $execute = mysqli_query($con,$del);
    if($execute){
        echo "deleted";
        header("Location:pass_777@/passwords.php");
    }else {
        echo "not deleted";
        echo $id;
    }
}

?>
<h1>d</h1>