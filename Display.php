<?php 
include "Connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">


<!-- PAGE TITLE -->
<title>Plot Details - All</title>

<!-- FAVICONS -->
<link rel="icon" href="images/favicons/favicon2.ico">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

<!-- TEMPLATE COMMON CSS -->
    <link rel="stylesheet" href="css/ckav-elements.css">

<!-- LOODING ANIMATION  CSS -->
    <link rel="stylesheet" href="css/ckav-main.css">






    <style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


       img{
        width:90%;
        margin:10px;
       } 
       td{
        width:10%;
       }
       table{
        background-color: #191c29;
        color:white;
       }




       
       th{
        font-size:15px;
        
       }
       td{
        font-size:15px;




       }
       .delete{
        background-color:#F70745;
        padding:20px 40px;
        margin:30px;
        border-radius:8px;
       }
       .delete:hover{
        background-color:#F15771;
       }
       .delete a:hover{
        color:black;
       }
       .delete a{
        color:white;
        text-decoration:none;
        font-size:20px;
       } 

       .update{
        background-color:#048418 ;
        padding:20px 40px;
        margin:30px;
        border-radius:8px;
       }
       .update a{
        color:white;
        text-decoration:none;
        font-size:20px;
       }
       .update:hover{
        background-color:#23C00D ;
       }
       .update a:hover{
        color:black;
       }
       /* .Add{
           width:6%;
           Height:6%;
        color:white;
        padding:2px;
        background:#979A9A;
        margin:5px;      
        border-radius:7px;
        border:none;
        font-size:18px;
       }
       .Add:hover{
        background-color:#C4BCC1;
       } */

 button {
  margin: 20px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

/* ADD Button */
 .btn-5 {
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  background: rgb(255,27,0);
background: black;
}
.btn-5:hover {
  color:black;
  background: transparent;
   box-shadow:none;
}
.btn-5:before,
.btn-5:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: white;
  box-shadow:
   -1px -1px 5px 0px #fff,
   7px 7px 20px 0px #0003,
   4px 4px 5px 0px #0002;
  transition:400ms ease all;
}
.btn-5:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.btn-5:hover:before,
.btn-5:hover:after{
  width:100%;
  transition:800ms ease all;
}


/* Update Button */
/* 2 */
.btn-2 {
  background: rgb(96,9,240);
  background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
  border: none;
  
}
.btn-2:before {
  height: 0%;
  width: 2px;
}
.btn-2:hover {
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .5), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}


/* 11 */
/* Delete */
.btn-11 {
  border: none;
  background: rgb(251,33,117);
    background: linear-gradient(0deg, rgba(251,33,117,1) 0%, rgba(234,76,137,1) 100%);
    color: #fff;
    overflow: hidden;
}
.btn-11:hover {
    text-decoration: none;
    color: #fff;
}
.btn-11:before {
    position: absolute;
    content: '';
    display: inline-block;
    top: -180px;
    left: 0;
    width: 30px;
    height: 100%;
    background-color: #fff;
    animation: shiny-btn1 3s ease-in-out infinite;
}
.btn-11:hover{
  opacity: .7;
}
.btn-11:active{
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
}


@-webkit-keyframes shiny-btn1 {
    0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
    80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
    81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
    100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
}
   
body{
        background-color:#7B7D7D;
       }


 .btn-8 {
  background-color: #F385BC;
  background-image: linear-gradient(315deg, #F385BC 0%, #980816 74%);
  line-height: 42px;
  padding: 0;
  border: none;
  margin-left:1190px;
}
.btn-8 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-8:before,
.btn-8:after {
  position: absolute;
  content: "";
  right: 0;
  bottom: 0;
  background: #9C0720;
  /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
  transition: all 0.3s ease;
}
.btn-8:before{
   height: 0%;
   width: 4px;
}
.btn-8:after {
  width: 0%;
  height: 4px;
}
.btn-8:hover:before {
  height: 100%;
}
.btn-8:hover:after {
  width: 100%;
}
.btn-8:hover{
  background: transparent;
}
.btn-8 span:hover{
  color: #600615;
  font-size:18px;
}
.btn-8 span:before,
.btn-8 span:after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  background: #9C0720;
  /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.5),
    inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
  transition: all 0.3s ease;
}
.btn-8 span:before {
  width: 4px;
  height: 0%;
}
.btn-8 span:after {
  height: 4px;
  width: 0%;
}
.btn-8 span:hover:before {
  height: 100%;
}
.btn-8 span:hover:after {
  width: 100%;
}  




























body {
  padding: 0px;
  background-color: #000000;
  line-height: 3.6;
  -webkit-font-smoothing: antialiased;
  color: #fff;
  font-size: 1.6rem;
  font-family: 'Lato', sans-serif;
}



.close {
  background: none;
  padding: 18px;
  color: #fff;
  font-weight: 300;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 4px;
  line-height: 1;
  font-size: 1.8rem;
  position: fixed;
  right: 40px;
  top: 20px;
  -moz-transition: border 0.3s linear;
  -o-transition: border 0.3s linear;
  -webkit-transition: border 0.3s linear;
  transition: border 0.3s linear;
}
.close:hover, .close:focus {
  background-color: #a82545;
  border: 1px solid #a82545;
}



@media (min-width: 460px) {
  td {
    text-align: center;
  }
  td:before {
    display: inline-block;
    text-align: center;
    width: 140px;
  }
}

@media (min-width: 720px) {
  table {
    display: table;
  }

  tr {
    display: table-row;
  }

  td, th {
    display: table-cell;
  }

  tbody {
    display: table-row-group;
  }

  thead {
    display: table-header-group;
  }

  tfoot {
    display: table-footer-group;
  }

  td {
    border: 1px solid #28333f;
  }
  td:before {
    display: none;
  }





  td, th {
    padding: 0px;
    margin: 0;
    box-sizing: border-box;
}
  }





  tr:nth-child(2n+2) td {
    background-color: #242e39;
    
    -webkit-transition: background-color 1s ease-out;
    -moz-transition: background-color 1s ease-out;
    -o-transition: background-color 1s ease-out;
    transition: background-color 1s ease-out;
  }


  tr:hover td {
    background-color: #101218;
    cursor: pointer;
  }


  tfoot th {
    display: table-cell;
  }

}















/* ************** Navigation Bar *********** */
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 80px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #de1d36;
  color: black;
}

.topnav a.active {
  background-color: #de1d36;
  color: white;
}
/* ************** Navigation Bar *********** */








    </style>
</head>
<body>


<!--****************  PAGE LOADER *******************-->
<div id="loader">
        <div class="load-three-bounce">
            <div class="load-child bounce1"></div>
            <div class="load-child bounce2"></div>
            <div class="load-child bounce3"></div>
        </div>
    </div>
<!-- ************ END : PAGE LOADER ***********  -->



    <div class="topnav">
      <a class="active" href="index.html">Home</a>
      <a href="goto.php">Back</a>
      <a href="Register.php">Add New Record</a>
      <a href="index.html">Log Out</a>
    </div>

   
    
<table border=1>
    
    <tr>
        <!--table heder -->
   
    <th>බලපත්‍ර_අංකය</th>
    <th>නිකුත්_කල_දිනය</th>
    <th>ලෙජර_අංකය</th>
    <th>e_slims අංකය</th>
    <th>කට්ටිකරුගේ_නම</th>
    <th>බලපත්‍රය_නිකුත්කල ආකරය</th>
    <th>ග්‍රාම_නිලධාරී වසම</th>
    <th>මැනුම්_කර ඇත/නැත</th>
    <th>පිඹුරු_අංකය</th>
    <th>කැබලි_අංකය</th>
    <th>ප්‍රමාණය</th>
    <th>පසු_උරුමකරුගේ_නම/ උරුමකරුවන්ගේ නම්</th>
    <th>දීමනා_පත්‍රයක්_නිකුත්_කර ඇත/නැත</th>
    <th>දීමනා_පත්‍ර අංකය</th>
    <th>දීමනා_පත්‍රය නිකුත්_කල දිනය</th>
    <th>වෙනත්_විස්තර</th>
    
    <th colspan=2>Operater</th>
         
    </tr>

    <?php 
        $sql="SELECT * FROM `details`";
        $Result=mysqli_query($conn,$sql);


    if($Result){

        while($Row=mysqli_fetch_assoc($Result)){

            //input data variable walata gaththa
          
            $lno=$Row['lno'];
            $doi=$Row['doi'];
            $leno=$Row['leno'];
            $esno=$Row['esno'];
            $noc=$Row['noc'];
            $hli=$Row['hli'];
            $vod=$Row['vod'];
            $mea=$Row['mea'];
            $pno=$Row['pno'];
            $lotno=$Row['lotno'];
            $siz=$Row['siz'];
            $suc=$Row['suc'];
            $allo=$Row['allo'];
            $ono=$Row['ono'];
            $doio=$Row['doio'];
            $odet=$Row['odet'];



           //e variable table eke td walata set kara
            echo '<tr>
          
          
            <td>'.$lno.'</td>
            <td>'.$doi.'</td>
            <td>'.$leno.'</td>
            <td>'.$esno.'</td>
            <td>'.$noc.'</td>
            <td>'.$hli.'</td>
            <td>'.$vod.'</td>
            <td>'.$mea.'</td>
            <td>'.$pno.'</td>
            <td>'.$lotno.'</td>
            <td>'.$siz.'</td>
            <td>'.$suc.'</td>
            <td>'.$allo.'</td>
            <td>'.$ono.'</td>
            <td>'.$doio.'</td>
            <td>'.$odet.'</td>

            
            
           
           

            <td><button class="delete custom-btn btn-11 dot"><a href="Delete.php? deleteid='.$lno.'">Delete</a></button></td>
            <td><button class="update custom-btn btn-2"><a href="Update.php? updateid='.$lno.'">Update</a></button></td>
            </tr>';
            

        }
      //  echo "Select Query Ok";


       
    }
    ?>
  </table>








<!-- COMMON VENDOR SCRIPTS -->
<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="vendor/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="vendor/sweetalert/sweetalert2.min.js"></script>
<script src="vendor/jarallax/jarallax.min.js"></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/swiper/js/swiper.min.js"></script>
<script src="vendor/jQuery-viewport-checker/jquery.viewportchecker.min.js"></script>
<script src="vendor/enquire/enquire.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<script src="vendor/isotope/packery-mode.pkgd.min.js"></script>

<!-- PAGE SPECIFIC VENDOR SCRIPTS -->
<script src="vendor/particle-animation/particles.min.js"></script>	
<script src="vendor/particle-animation/partical-animation.js"></script>	

<!-- TEMPLATE COMMON SCRIPTS -->
<script src="js/ckav-main.js"></script>












</body>
</html>