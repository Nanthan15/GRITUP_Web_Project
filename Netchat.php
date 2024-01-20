<!DOCTYPE html>
<html lang="en" style="background-image: linear-gradient(to bottom ,#ec6ead,#3494e6);" >
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Messages Board - Bootdey.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* body { background: #f5f5f5; } */
        
        .text-white-50 { color: rgba(255, 255, 255, .5); }
        .bg-blue { background-color:#00b5ec; }
        .border-bottom { border-bottom: 1px solid #e5e5e5; }
        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>


<!-- mofdi --> 
<link type="text/css" href="css/nav.css" rel="stylesheet" />

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
<!-- end mopdu -->
</head>
<body style="background-image: linear-gradient(to bottom ,#3494e6, #ec6ead);">
    <!-- nav -->
    <nav>
        <div class="nav-bar">
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
                    <li><a href="viewstudent1.php">Network</a></li>
                    <li><a href="index.php#ab">About</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light" style="margin-bottom: 20px;"><a href="signin.php">
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
    <!-- nav end -->
    <main role="main" class="container bootdey.com">
       
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Message</h6>
            <?php
            session_start();
            $sn = $_SESSION['user'];
            //echo "<script>alert('$sn')</script>";
            $un = $_REQUEST['stu'];
            if(isset($_REQUEST['log'])){
                $mg = $_REQUEST['msg'];
                   
               
               $q = "insert into chat (adminemail,useremail,question,answer) values('$un','$sn','$mg','')";
               $r = mysqli_query($db,$q);
                if($r){
                  echo "<script>alert('Admin Will Get Back to me');</script>";
                  
               }
               else{
                echo "<script>alert('Error');</script>";
                //   mysqli_query($con);
               }};
            // PHP code to fetch and display messages from the database
            $q1 = "SELECT * FROM chat WHERE adminemail='$un' AND useremail='$sn'";
            $user = "SELECT * FROM student WHERE email='$sn'";
            $admin = "select * from studentadmin where email='$un'";
            $r2 = mysqli_query($db, $admin);
            $r1 = mysqli_query($db, $q1);
            while($e=mysqli_fetch_assoc($r2)){
                $im = $e['pic'];
                $uname = $e['name'];
                
                if($im){
                    echo '<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow" >
                <img class="mr-3" src="profile/'.$im.'" alt width="48" height="48" >
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100" style="padding-bottom:4px">'. $uname.'</h6>
                    

                    <form action="" method="post">
                    <div  align="center" width="40%" >
                    
                    
                    <div><input name="msg" id="msg" placeholder="Enter Message" 
                    required > <input type="submit" value="Send" name="log">
                </div>
                    </div>
                
                
                
                </form>





                </div>
                </div><hr >
                <small>Inbox</small>';

                }

                else{
                    echo '<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow">
                <img class="mr-3" src="./user.png" alt width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100" style="padding-bottom:4px">'. $un.'</h6>
                    

                    <form action="" method="post">
                    <div  align="center" width="40%" >
                    
                    
                    <div><input name="msg" id="msg" placeholder="Enter Message" 
                    required > <input type="submit" value="Send" name="log">
                </div>
                    </div>
                
                
                
                </form>





                </div>
                </div><hr>
                <small>Messages</small>';

                }

            }
            

            while ($d = mysqli_fetch_assoc($r1) ) {
                
                
                
                echo '
                <div class="media text-muted pt-3">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt class="mr-2 rounded" width="32" height="32">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">' . $d['useremail'] . '</strong>
                            ' . $d['question'] . '
                        </p>
                    </div>';
                echo '<div class="media text-muted pt-3">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt class="mr-2 rounded" width="32" height="32">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">'.$_REQUEST['stu'].'</strong>
                            ' . $d['answer'] . '
                        </p>
                    </div>';
            }
            ?>
            <small class="d-block text-right mt-3">
                
            </small>
        </div>
    </main>
    <br><br><br>

    
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
})

</script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
