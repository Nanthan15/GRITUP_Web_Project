<!DOCTYPE html>
<html lang="en"
  xmlns:th="http://www.thymeleaf.org"
>
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/nav.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />


<style>
    td{
        padding:10px;
    }
    input{
        height:40px;
        width:80%;
    }
    select{
        height:40px;
        width:80%;
    }
    table{
        font-size:18px;
        background-color:#0abde3;
        color:white;
        box-shadow:0px 0px 5px blue;
    }
    .container{
       display: inline-flex;
        
        
    }

    .title1{
        margin-left: 30px;
        margin-bottom: 30px;
        font-weight: bolder;
        color: white;
        text-transform: uppercase;
        font-size: larger;

    }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Personalized</title>
</head>
<body style="background-image: linear-gradient(to top ,#1A2980, #26D0CE);">
<?php

$br = $_REQUEST['branch'];
$sy = $_REQUEST['syllabus'];
$se = $_REQUEST['semester'];
$c1="";
if(isset($_REQUEST['c1'])){
$c1 = $_REQUEST['c1'];
}
$c2="";
if(isset($_REQUEST['c2'])){
$c2 = $_REQUEST['c2'];
}
$c3="";
if(isset($_REQUEST['c3'])){
$c3 = $_REQUEST['c3'];
}
$c4="";
if(isset($_REQUEST['c4'])){
$c4 = $_REQUEST['c4'];
}
$c5="";
if(isset($_REQUEST['c5'])){
$c5 = $_REQUEST['c5'];
}
$c6="";
if(isset($_REQUEST['c6'])){
$c6 = $_REQUEST['c6'];
}
$c7="";
if(isset($_REQUEST['c7'])){
$c7 = $_REQUEST['c7'];
}

?>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 10px;"></a></span>

            <div class="menu">
                <div class="logo-toggle" >
                    <span class="logo" style="margin-top:40px;"><a href="#">GRITUP</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                <li><a href="index.php" >Home</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li><a href="check.php">Customize</a></li>
                    <li><a href="viewstudent.php">Network</a></li>
                    <li><a href="index.php#ab">About</a></li>
                    <li><a href="login.php">Admin</a></li>
               </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light" style="margin-bottom: 20px;"><a href="Profile.html">
                    <i class="fa-solid fa-user"></i></a>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    
                   </div>

                    <div class="search-field">
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <br><br><br><br>
   
    <?php
    echo "<h3 class='title1'>Results</h3>";
    
    $q = "select * from service where branch='$br' and syllabus='$sy' and semester='$se' and servicename in ('$c1','$c2','$c3','$c4','$c5','$c6','$c7')";
    $r = mysqli_query($db,$q);
    $i=1;
    while($d = mysqli_fetch_assoc($r)){
        $file = $d['file'];
        $sub = $d['subjectname'];
        if($sub){
            echo "<div class='container'>";
            echo "<div class='card' style='width: 23rem;padding:10px;float:left;margin-left:20px;margin-bottom:15px;line-height:30px'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title' style='text-transform:uppercase'><b>Request Name :".$d['servicename']."</b></h5>";
            echo "<p class='card-text'>Branch : ".$d['branch']."</p>";
            echo "<p class='card-text'>Syllabus : ".$d['syllabus']."</p>";
            echo "<p class='card-text'>Semester : ".$d['semester']."</p>";
            echo "<p class='card-text'>Subject : ".$d['subjectname']."</p>";
            echo "<br>";
            if($d['servicename']=="elearning"){
                echo "<button class='btn btn-primary'><a style='color:white' href='./elearn.php'>View</a></button>";

            }
            else{
                echo "<button class='btn btn-primary'><a style='color:white' href='view.php?fn=$file'>View</a></button>";

            }
            
            
            echo "</div></div></div>"; 
        

        }
        else{
            echo "<div class='container'>";
            echo "<div class='card' style='width: 22rem;padding:10px;float:left;margin-left:20px;margin-bottom:15px;line-height:30px'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'><b>Request Name :".$d['servicename']."</b></h5>";
            echo "<p class='card-text'>Branch : ".$d['branch']."</p>";
            echo "<p class='card-text'>Syllabus : ".$d['syllabus']."</p>";
            echo "<p class='card-text'>Semester : ".$d['semester']."</p>";
            
            echo "<br>";
            if($d['servicename']=="elearning"){
                echo "<button class='btn btn-primary'><a style='color:white' href='./elearn.php'>View</a></button>";

            }
            else{
                echo "<button class='btn btn-primary'><a style='color:white' href='view.php?fn=$file'>View</a></button>";

            }
            
            
            echo "</div></div></div>"; 

        }
    }
    ?>

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>

<script>
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

</script>
    



    
</body>
</html>