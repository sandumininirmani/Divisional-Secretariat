<?php 
include "Connection.php";
  //delete e valu alla gannawa 
if(isset($_GET['deleteid'])){
    $lno=$_GET['deleteid'];

    // delete query
    
    $sql="DELETE FROM `details` WHERE `lno`= '$lno'";

    $Result=mysqli_query($conn,$sql);
    //aye display page ekata yanna
    if($Result){
        header('location:Display.php');
    }
}


?>