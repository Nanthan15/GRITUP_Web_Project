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
    <link type="text/css" href="css/networkcard.css" rel="stylesheet" />
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

    .title3{
        font-size: larger;
        margin-top: 30px;
        margin-left: 25px;
        font-weight: bolder;
        text-transform: uppercase;
    }
    
   
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>

    <?php
    session_start();
    $sn = $_SESSION['user'];
    ?>
   
    <nav style="background-color: white;">
        <div class="nav-bar" style="background-color: white;">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 0px;"></a></span>

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
                <div class="dark-light" style="margin-bottom: 20px;"><a href="signin.php">
                    <i class="fa-solid fa-user" style="color: black;"></i></a>

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
<body style="background-color: #AFD3E2;">

    <br><br><br>

    


    <?php

    echo "<h1 class='title3' >PES Polytechnic Students</h1>";
    
    $q = "select * from studentadmin";
    $r = mysqli_query($db,$q);
    $i=1;
    while($d = mysqli_fetch_assoc($r)){
        $im = $d['pic'];
        
        if($im){
            echo "<div class='container1'>";

        echo "<div class='container mt-5'>
    
        <div  >
            
            <div class=' '>
                
                <div class='card p-3 py-4 mx-2 cc'>
                    
                    <div class='text-center'>
                        <img src='profile/$im' width='100' class='rounded-circle'>
                    </div>
                    
                    <div class='text-center mt-3'>
                        <span class='bg-secondary p-1 px-4 rounded text-white'>Student Admin</span>
                        <h5 class='mt-2 mb-0' style='text-transform:uppercase'><b>".$d['name']."</b></h5>
                        
                        
                        <div class='px-4 mt-1'>
                        <p class='card-text'>Branch : ".$d['branch']."</p>
                        <p class='card-text'>Semester : ".$d['semester']."</p>
                        <p class='card-text'>Email : ".$d['email']."</p>

                            
                        
                        </div>
                        <br>
                        
                        
                        
                        <div class='buttons' style='display:flex;justify-content:center;'>
                       
                            
                        <a href='signin.php' onclick='check()'><button class='btn btn-outline px-4'>Message</button></a>
                        
                            
                            
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>";
    echo "</div>";
    

        }
        else{
            echo "<div class='container1'>";

        echo "<div class='container mt-5'>
    
        <div  >
            
            <div class=' '>
                
                <div class='card p-3 py-4 mx-2 cc'>
                    
                    <div class='text-center'>
                        <img src='./user.png' width='100' class='rounded-circle'>
                    </div>
                    
                    <div class='text-center mt-3'>
                        <span class='bg-secondary p-1 px-4 rounded text-white'>Student Admin</span>
                        <h5 class='mt-2 mb-0' style='text-transform:uppercase'><b>".$d['name']."</b></h5>
                        
                        
                        <div class='px-4 mt-1'>
                        <p class='card-text'>Branch : ".$d['branch']."</p>
                        <p class='card-text'>Semester : ".$d['semester']."</p>
                        <p class='card-text'>Email : ".$d['email']."</p>

                            
                        
                        </div>
                        <br>
                        
                        
                        
                        <div class='buttons' style='display:flex;justify-content:center;'>
                       
                            
                        <a href='signin.php' onclick='check()'><button class='btn btn-outline px-4'>Message</button></a>
                        
                            
                            
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>";
    echo "</div>";

        }





        
        
       
    }


    echo "<h1 class='title3' >Meet Our Industry Experts</h1>";





    $q = "select * from proffessional";
    $r = mysqli_query($db,$q);
    $i=1;
    while($d = mysqli_fetch_assoc($r)){
        $im = $d['pic'];
        
        if($im){
            echo "<div class='container1'>";

        echo "<div class='container mt-5'>
    
        <div  >
            
            <div class=' '>
                
                <div class='card p-3 py-4 mx-2 cc'>
                    
                    <div class='text-center'>
                        <img src='profile/$im' width='100' class='rounded-circle'>
                    </div>
                    
                    <div class='text-center mt-3'>
                        <span class='bg-secondary p-1 px-4 rounded text-white'>Professional</span>
                        <h5 class='mt-2 mb-0' style='text-transform:uppercase'><b>".$d['cname']."</b></h5>
                        
                        
                        <div class='px-4 mt-1'>
                        <p class='card-text'> ".$d['role']."</p>
                        <p class='card-text'> ".$d['description']."</p>
                        

                            
                        
                        </div>
                        <br>
                        
                        
                        
                        <div class='buttons' style='display:flex;justify-content:center;'>
                       
                            
                        <a href='signin.php' onclick='check()'><button class='btn btn-outline px-4'>Message</button></a>
                        
                            
                            
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>";
    echo "</div>";
    

        }
        else{
            echo "<div class='container1'>";

        echo "<div class='container mt-5'>
    
        <div  >
            
            <div class=' '>
                
                <div class='card p-3 py-4 mx-2 cc'>
                    
                    <div class='text-center'>
                        <img src='./user.png' width='100' class='rounded-circle'>
                    </div>
                    
                    <div class='text-center mt-3'>
                        <span class='bg-secondary p-1 px-4 rounded text-white'>Student Admin</span>
                        <h5 class='mt-2 mb-0' style='text-transform:uppercase'><b>".$d['cname']."</b></h5>
                        
                        
                        <div class='px-4 mt-1'>
                        <p class='card-text'> ".$d['role']."</p>
                        <p class='card-text'> ".$d['description']."</p>

                            
                        
                        </div>
                        <br>
                        
                        
                        
                        <div class='buttons' style='display:flex;justify-content:center;'>
                       
                            
                        <a href='signin.php' onclick='check()'><button class='btn btn-outline px-4'>Message</button></a>
                        
                            
                            
                        </div>
                        
                        
                    </div>
                    
                   
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>";
    echo "</div>";

        }





        
        
       
    }
    ?>

    



    



    
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
   
  
    <!-- end -->
    


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
<script>

    const check=()=>{
        const messageButton = document.getElementById('messageButton');
    messageButton.addEventListener('click', function() {
        alert('Please login');
    });

    }
    
</script>
    



    
</body>
</html>