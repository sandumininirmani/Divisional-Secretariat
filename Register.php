<?php 
    include "Connection.php";

    if(isset($_POST['submit'])){
        $lno=$_POST['lno'];
        $doi=$_POST['doi'];
        $leno=$_POST['leno'];
        $esno=$_POST['esno'];
        $noc=$_POST['noc'];
        $hli=$_POST['hli'];
        $vod=$_POST['vod'];
        $mea=$_POST['mea'];
        $pno=$_POST['pno'];
        $lotno=$_POST['lotno'];
        $siz=$_POST['siz'];
        $suc=$_POST['suc'];
        $allo=$_POST['allo'];
        $ono=$_POST['ono'];
        $doio=$_POST['doio'];
        $odet=$_POST['odet'];



        $sql="INSERT INTO `details`(`lno`, `doi`, `leno`, `esno`, `noc`, `hli`,`vod`,`mea`, `pno`, `lotno`, `siz`, `suc`, `allo`,`ono`, `doio`,`odet`) VALUES('$lno','$doi','$leno','$esno','$noc','$hli','$vod','$mea','$pno','$lotno','$siz','$suc','$allo','$ono','$doio','$odet')";
   
        if(mysqli_query($conn,$sql)){
         
           header('location:Display.php');
          }else{
            echo "Data Insert Not Success";
        }

    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<!-- English font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet"/>


    <!-- Sinhala font -->
    <!--<link href='https://fonts.googleapis.com/css?family=Noto Sans Sinhala' rel='stylesheet'> -->
    <link href='https://fonts.googleapis.com/css?family=Noto Sans Sinhala :wght@800;900&display=swap' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css" />
    <!-- Sinhala font -->






<!-- Stylesheet for background -->
    <link rel="stylesheet" href="./style.css" />











<!-- PAGE TITLE -->
<title>Add New Record</title>

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


/* ************** Sinhala fonts *********** */
@font-face { font-family: 'Noto Sans Sinhala', sans-serif; src: url('font/NotoSansSinhala-Regular.ttf'); } 
    
.text-left { /*label*/
  font-family:'Noto Sans Sinhala', sans-serif;
  src:('font/NotoSansSinhala-Regular.ttf');
  font-weight:800;
  color:#426696;
  font-size:1.6rem; 
  opacity: 0.5;
}

.full-width { /*text box*/
  font-family:'Noto Sans Sinhala', sans-serif;
  src:('font/NotoSansSinhala-Regular.ttf');
  font-weight:600;
  color:#426696;
  font-size:2rem; 
  opacity: 0.8;
}

.dropdown {
  font-family:'Noto Sans Sinhala', sans-serif;
  src:('font/NotoSansSinhala-Regular.ttf');
  font-weight:600;
  color:#426696;
  font-size:1.5rem; 
  opacity: 0.8;
}

/* ************** Sinhala fonts *********** */








/* ************** Navigation Bar *********** */
body {
  /* background-color: #191c29; */
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



html, body * { box-sizing: border-box; font-family: 'Open Sans', sans-serif; }



.container {
  width: 100%;
  height:80%;
  padding:50px 10px;
  padding-bottom: 150px;
  margin:50px 20px;
} 



.frame {
  /* height: 100%; */
  width: 35%;
  background: #191c29;
  background-size: cover;
  margin-left: auto;
  margin-right: auto;
  border-top: solid 1px rgba(255,255,255,.5);
  border-radius: 5px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
  overflow: hidden;
  transition: all .5s ease;
}

.frame-long {
  height:70%;
}

.frame-short {
  /* height: 80%; */
  margin-top: 50px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
}



.nav{
  background: #191c29;
  width: var(--card-width);
  height: var(--card-height);
  padding: 3px;
  position: relative;
  border-radius: 6px;
  justify-content: center;
  align-items: center;
  text-align: center;
  display: flex;
  font-size: 1.5em;
  color: rgb(88 199 250 / 0%);
  cursor: pointer;
  font-family: cursive;
}

.nav:hover {
  color: rgb(88 199 250 / 100%);
  transition: color 1s;
}
.nav:hover:before, .nav:hover:after {
  animation: none;
  opacity: 0;
}


.nav::before {
  content: "";
  width: 104%;
  height: 102%;
  border-radius: 8px;
  background-image: linear-gradient(
    var(--rotate)
    , #5ddcff, #3c67e3 43%, #4e00c2);
    position: absolute;
    z-index: -1;
    top: -1%;
    left: -2%;
    animation: spin 2.5s linear infinite;
}

.nav::after {
  position: absolute;
  content: "";
  top: calc(var(--card-height) / 6);
  left: 0;
  right: 0;
  z-index: -1;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  transform: scale(0.8);
  filter: blur(calc(var(--card-height) / 6));
  background-image: linear-gradient(
    var(--rotate)
    , #5ddcff, #3c67e3 43%, #4e00c2);
    opacity: 1;
  transition: opacity .5s;
  animation: spin 2.5s linear infinite;
}



 .nav {
  width: 100%;
  height: 50px;
  padding-top: 20px;
  opacity: 1;
  transition: all .5s ease;
}
/*
.nav-up {
  transform: translateY(-150px);
  opacity: 0;
} */

/* heder eka 
li {
  padding-left: 10px;
  font-size: 25px;
  display: inline;
  text-align: left;
  text-transform: uppercase;
  padding-right: 10px;
  color: #ffffff;
}*/

 .signin-active a {
  padding-bottom: 5px;
  color: #000000;
  text-decoration: none;
  border-bottom: solid 2px #1059FF;
   transition: all .25s ease; 
  cursor: pointer;
} 

/* .signin-inactive a {
  padding-bottom: 0;
  color: rgba(255,255,255,.3);
  text-decoration: none;
  border-bottom: none;
  cursor: pointer;
} */


/* ********************************************************************************
.form-signin {
  width: 430px;
  height: 375px;
  font-size: 16px;
  font-weight: 300;
  padding-left: 37px;
  padding-right: 37px;
  padding-top: 55px;
  padding-bottom:550px;
  transition: opacity .5s ease, transform .5s ease;
 
}

.form-signin-left {
  transform: translateX(-400px);
  opacity: .0;
}


*/


/*.form-signin input{
  color: #ffffff;
  font-size: 15px;
 
}*/

/* bt input design */
/*
.form-styling {
  width: 100%;
  height: 35px;
	padding-left: 15px;
	border: none;
	border-radius: 20px;
  margin-bottom: 20px;
  background: rgba(255,255,255,.2);
}





******************************************************************************** */



/*
label {
  font-weight: 400;
  text-transform: uppercase;
  font-size: 13px;
  padding-left: 15px;
  padding-bottom: 10px;
  color: rgba(255,255,255,.7);
  display: block;
} */

:focus {outline: none;
}

.form-signin input:focus, textarea:focus {
    /*background: rgba(255,255,255,.3);*/
    background: #cff9ff ;
    /*border: none;  */
    /* padding-right: 40px; */
   /* margin-top: 8px; */
    transition: background .5s ease;
 }

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  display: none;
}

[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 85px;
  padding-top: 2px;
  cursor: pointer;
  margin-top: 8px;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  width: 65px; 
  height: 30px;
  background: rgba(255,255,255,.2);
  border-radius: 15px;
  left: 0; 
  top: -3px;
  transition: all .2s ease;
}

[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 10px; 
  height: 10px;
  background: rgba(255,255,255,.7);
  border-radius: 50%;
  top: 7px; 
  left: 10px;
  transition: all .2s ease;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background: #0F4FE6; 
}

[type="checkbox"]:checked + label:after {
  background: #ffffff;
  top: 7px; 
  left: 45px;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s ease;
}

[type="checkbox"]:not(:checked) + label .ui:before {
  content: "no";
  left: 32px;
  color: rgba(255,255,255,.7);
}

[type="checkbox"]:checked + label .ui:after {
  content: "yes";
  color: #ffffff;
}

[type="checkbox"]:focus + label:before {
  box-sizing: border-box;
  margin-top: -1px;
}



.btn-signin {
  
  float: left;
  padding-top: 8px;
  width: 70%;
  height: 35px;
  border: none;
  border-radius: 50px;
  margin: 5px 50px;
  background-color: #663dff;
  border-radius: 5px;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  transition: all 0.3s ease;
}







/* refresh button styling */

.refreshicon:hover {
  /* transform: rotate(2deg); */
 
  background: #b621fe;
 

}

.bbt{
    margin:20px 50px;
   
}     
.Image{
width:100%;
}  
input[type="file"]::file-selector-button:hover{
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


    

<!-- ************************ Navbar *************************  -->
    <div class="topnav">
      <a class="active" href="index.html">Home</a>
      <a href="goto.php">Back</a>
      <a href="Register.php">Add New Record</a>
      <a href="index.html">Log Out</a>
    </div>
<!-- ************************** END : Navbar ******************  -->


<main>
      <section class="glass">
       
        <div class="games">
            <div class="status">
                <center>        
                <h1 style="color:#426696;font-weight: 600;font-size: 3rem;opacity: 0.8;">Add New Record</h1>  
                </center>
            </div>

          


                  <form class="form-signin" action="" method="post" name="form" enctype="multipart/form-data">


                    <div class="row">
                    <label for="lno" class="text-left" >බලපත්‍ර අංකය</label>
                    <input class="full-width " type="text" name="lno" placeholder="" required onkeyup="this.setAttribute('value', this.value);" />
                    </div> <br>

                    <div class="row">
                    <label for="doi" class="text-left">නිකුත් කල දිනය</label>
                    <input class="full-width " type="date" name="doi" placeholder="" />
                    </div> <br>

                    <div class="row">
                    <label for="leno" class="text-left">ලෙජර අංකය</label>
                    <input class="full-width " type="text" name="leno" placeholder="" />
                    </div> <br>
                    
                    <div class="row">
                    <label for="esno" class="text-left">e-slims අංකය</label>
                    <input class="full-width " type="text" name="esno" placeholder="" />
                    </div> <br>

                    <div class="row">
                    <label for="noc" class="text-left">කට්ටිකරුගේ නම</label>
                    <input class="full-width " type="text" name="noc" placeholder="" required onkeyup="this.setAttribute('value', this.value);" />
                    </div> <br>


                    <div class="row">
                    <label for="hli" class="text-left">බලපත්‍රය නිකුත්කල ආකරය</label>
                    <!--<input class="text-left" type="dropdown" name="hli" placeholder="" />-->
                      <select class="full-width " name="hli" placeholder="">  
                        <option class="full-width "></option>
                        <option class="dropdown">ගොවි පන්තිය</option>
                        <option class="dropdown ">ගැණුම් මිල</option>
                      </select>
                    </div> <br>
                    
                    <div class="row">
                    <label for="vod" class="text-left">ග්‍රාම නිලධාරී වසම</label>
                      <select class="full-width " name="vod" placeholder="" required onkeyup="this.setAttribute('value', this.value);" >  
                        <option class="full-width "></option>
                        <option class="dropdown">94 බී පොල්ගහවිල</option>
                        <option class="dropdown">94 සී කුට්ටියාවත්ත</option>
                        <option class="dropdown">192 අම්පෙගම</option>
                        <option class="dropdown">192 ඒ ගලහෙන්කන්ද</option>
                        <option class="dropdown">193 දිවිතුර</option>
                        <option class="dropdown">193 ඒ දිවිතුර දකුණ</option>
                        <option class="dropdown">193 බී මද්දෙවිල</option>
                        <option class="dropdown">193 සී නාඹරඅත්ත</option>
                        <option class="dropdown">193 ඩී හාමිංගල</option>
                        <option class="dropdown">193 ඊ නුගේතොට</option>
                        <option class="dropdown">193 එෆ් මිරිස්වත්ත</option>
                        <option class="dropdown">196 පාතවැලිවිටිය</option>
                        <option class="dropdown">196 ඒ වාඩුවැලිවිටිය දකුණ</option>
                        <option class="dropdown">196 බී පාතවැලිවිටිය උතුර</option>
                        <option class="dropdown">196 සී වාඩුවැලිවිටිය උතුර</option>
                        <option class="dropdown">197 අගලිය</option>
                        <option class="dropdown">223 ඇත්කදුර</option>
                        <option class="dropdown">223 ඒ දිවිතුර නැගෙනහිර</option>
                        <option class="dropdown">223 බී තණබද්දේගම</option>
                        <option class="dropdown">223 සී පරණ ජනපදය</option>
                      </select>
                    </div> <br>






                    <div class="row">
                    <label for="mea" class="text-left">මැනුම් කර ඇත/නැත</label>
                      <select class="full-width " name="mea" placeholder="" >  
                        <option class="full-width "></option>
                        <option class="dropdown">ඇත</option>
                        <option class="dropdown ">නැත</option>
                      </select>
                    </div> <br>


                    <div class="row">
                    <label for="pno" class="text-left">පිඹුරු අංකය</label>
                    <input class="full-width " type="text" name="pno" placeholder="" />
                    </div> <br>


                    <div class="row">
                    <label for="lotno" class="text-left">කැබලි අංකය</label>
                    <input class="full-width " type="text" name="lotno" placeholder="" />
                    </div> <br>


                    <div class="row">
                    <label for="siz" class="text-left">ප්‍රමාණය</label>
                    <input class="full-width " type="text" name="siz" placeholder="" />
                    </div> <br>

                    <!--
                    <div class="row">
                    <label for="suc" class="text-left">පසු උරුමකරුගේ නම/ උරුමකරුවන්ගේ නම්</label>
                    <input class="full-width " type="text" name="suc" placeholder="" />
                    </div> <br> -->

                    <div class="row">
                    <label for="suc" class="text-left">පසු උරුමකරුගේ නම/ උරුමකරුවන්ගේ නම්</label>
                    <textarea class="full-width"  rows="2" cols="50" name="suc" placeholder=""> </textarea>
                    </div> <br>


                    <div class="row">
                    <label for="allo" class="text-left">දීමනා පත්‍රයක් නිකුත් කර ඇත/නැත</label>
                    <select class="full-width "  name="allo" placeholder="" >  
                        <option class="full-width "></option>
                        <option class="dropdown">ඇත</option>
                        <option class="dropdown ">නැත</option>
                      </select>
                    </div> <br>


                    <div class="row">
                    <label for="ono" class="text-left">දීමනා පත්‍ර අංකය</label>
                    <input class="full-width " type="text" name="ono" placeholder="" />
                    </div> <br>


                    <div class="row">
                    <label for="doio" class="text-left">දීමනා පත්‍රය නිකුත් කල දිනය</label>
                    <input class="full-width " type="date" name="doio" placeholder="" />
                    </div> <br>


                    <!-- <div class="row">
                    <label for="odet" class="text-left">වෙනත් විස්තර </label>
                    <input class="full-width " type="text" name="odet" placeholder="" />
                    </div> <br> -->

                    <div class="row">
                    <label for="odet" class="text-left">වෙනත් විස්තර </label>
                    <textarea class="full-width"  rows="2" cols="50" name="odet" placeholder="" > </textarea>
                    </div> <br>

                    
                    
                    <!--
                    <div class="row">
                    <input type="submit" name="submit" value="Add Now" class="btn-signin bbt refreshicon" 
                    class="full-width button button-xlarge color-button-default color-hov-button-white solid radius-10" data-ckav-smd="button-medium"
                    id="btnAddAction"/>
                    </div> 
                    -->
<br>
                                    <div class="row">
                                    <input type="submit" name="submit" id="btnAddAction"
                                        class="full-width button button-xlarge color-button-default color-hov-button-white solid radius-10" 
                                        data-ckav-smd="button-medium" value="Add " />
                                    </div>

                  </form>



        </div>
      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>












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