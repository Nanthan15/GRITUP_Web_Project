<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link type="text/css" href="css/ji.css" rel="stylesheet" />
    <link type="text/css" href="css/nav2.css" rel="stylesheet" />
   
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Google Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />


    <!-- Additional -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />


    <style>
        td {
            padding: 10px;
        }

        input {
            height: 40px;
            width: 80%;
        }

        select {
            height: 40px;
            width: 80%;
        }

        table {
            font-size: 18px;
            background-color: #0abde3;
            color: white;
            box-shadow: 0px 0px 5px blue;
        }

        .cd{
            width: 550px;
            height: 310px;
            
        }
        .menu{
          
          margin-top: 15px;
      
              }

        @media (max-width:660px) {
            .cd{
                width: 400px;
                height: 350px;

            }
            .menu{
          
              margin-top: 0px;
      
              }
            
        }

        


        
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>

<?php 

$sn = session_start();
if($sn=$_SESSION['user']){
    echo "<nav>
    <div class='nav-bar'>
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class='logo navLogo' id='ggg'><a href='#' ><img src='./assests/logo1.png' style='height: 35px;'></a></span>

        <div class='menu'>
            <div class='logo-toggle' >
                <span class='logo' style='margin-top:40px;'><a href='#'>GRITUP</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class='nav-links'>
            <li><a href='index1.html' >Home</a></li>
                <li><a href='index1.html#services'>Services</a></li>
                <li><a href='check.php'>Customize</a></li>
                <li><a href='viewstudent1.php'>Network</a></li>
                <li><a href='index1.html#ab'>About</a></li>
                <li><a href='index.php'>Logout</a></li>
           </ul>
        </div>

        <div class='darkLight-searchBox'>
            <div class='dark-light' style='margin-bottom: 20px;'><a href='Profile.php'>
                <i class='fa-solid fa-user'  style='color: black;'></i></a>
            </div>

            <div class='searchBox'>
               <div class='searchToggle'>
                
               </div>

                <div class='search-field'>
                    
                </div>
            </div>
        </div>
    </div>
</nav>";

}
else{
    echo "<nav>
    <div class='nav-bar'>
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class='logo navLogo' id='ggg'><a href='#' ><img src='./assests/logo1.png' style='height: 35px;'></a></span>

        <div class='menu'>
            <div class='logo-toggle' >
                <span class='logo' style='margin-top:40px;'><a href='#'>GRITUP</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class='nav-links'>
            <li><a href='index.php' >Home</a></li>
                <li><a href='index.php#services'>Services</a></li>
                <li><a href='check.php'>Customize</a></li>
                <li><a href='viewstudent.php'>Network</a></li>
                <li><a href='index.php#ab'>About</a></li>
                <li><a href='login.php'>Admin</a></li>
           </ul>
        </div>

        <div class='darkLight-searchBox'>
            <div class='dark-light' style='margin-bottom: 20px;'><a href='signin.php'>
                <i class='fa-solid fa-user'  style='color: black;'></i></a>
            </div>

            <div class='searchBox'>
               <div class='searchToggle'>
                
               </div>

                <div class='search-field'>
                    
                </div>
            </div>
        </div>
    </div>
</nav>";

}



?>

<body style="background-color: #cfdef3">

    


    <br><br><br><br>


    <?php
    $q = "select * from job";
    $r = mysqli_query($db, $q);
    $i = 1;
    echo "<h2 style='margin-left: 40px;margin-bottom:20px'>Find the Perfect Job</h2>";
    while ($d = mysqli_fetch_assoc($r)) {
        $li = $d['link'];
        

        echo "<div style='display:inline-flex;justify-content:center;margin-left:30px;margin-bottom:30px;flex-wrap:wrap'>";


        echo "<div class='container ' >
        
        <div  >
          <div class='' >
            <div class='card border-0 bg-light rounded shadow' >
              <div class='card-body p-4 cd' >
                <span class='badge rounded-pill check float-md-end mb-3 mb-sm-0'
                  >" . $d['type'] . "</span
                >
                <h5> " . $d['role'] . "</h5>
                <div class='mt-3'>
                  <span class='text-muted d-block'
                    ><i class='fa fa-building' aria-hidden='true'></i>
                    ". $d['cname'] ."</span
                  >
                  <span class='text-muted d-block'
                    ><i class='fa fa-map-marker' aria-hidden='true'></i> ". $d['location'] ."</span
                  >
                  <span class='text-muted d-block'
                    >Job Posted Date : " . $d['date'] . "</span
                  >

                  <span class='text-muted d-block'
                    > Description : <br>  " .   $d['descript'] . "</span
                  >
                </div>
                <div class='' style='padding-top:25px'>
                  <a href='$li' type=submit class='btn btn-primary' target='blank'>View Details</a>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>";
      echo "</div>";





        
        
    }
    ?>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>


    <script>
        const body = document.querySelector("body"),
            nav = document.querySelector("nav"),
            modeToggle = document.querySelector(".dark-light"),
            searchToggle = document.querySelector(".searchToggle"),
            sidebarOpen = document.querySelector(".sidebarOpen"),
            siderbarClose = document.querySelector(".siderbarClose");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark-mode") {
            body.classList.add("dark");
        }

        // js code to toggle dark and light mode
        modeToggle.addEventListener("click", () => {
            modeToggle.classList.toggle("active");
            body.classList.toggle("dark");

            // js code to keep user selected mode even page refresh or file reopen
            if (!body.classList.contains("dark")) {
                localStorage.setItem("mode", "light-mode");
            } else {
                localStorage.setItem("mode", "dark-mode");
            }
        });

        // js code to toggle search box
        searchToggle.addEventListener("click", () => {
            searchToggle.classList.toggle("active");
        });


        //   js code to toggle sidebar
        sidebarOpen.addEventListener("click", () => {
            nav.classList.add("active");
        });

        body.addEventListener("click", e => {
            let clickedElm = e.target;

            if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
                nav.classList.remove("active");
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"/>





</body>

</html>