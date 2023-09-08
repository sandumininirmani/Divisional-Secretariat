<?php 
  $dbServer="localhost";
  $dbUser="root";
  $dbPass="";
  $database="divisional";

  //SQL Connection eka
  $conn=mysqli_connect($dbServer,$dbUser,$dbPass,$database);

  if($conn){
      //Database Connection Success
      //echo ".";
  }else{
      //Database Connection Not Success
      //echo ":";
      echo "Database Connection Not Success";
  }

?>