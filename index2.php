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
    html,body{
        background-color:#2193b0
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px;
      padding: 20px;
      background: #f1f1f1;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      border-radius: 5px;
    margin: 0 auto;
    text-align: center;
    }

    h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  label {
    display: flex;
    text-align: left;
    margin-bottom: 10px;
    color: #555;
  }

  input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button {
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    
  }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>
<body>
   
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
                <li><a href="index2.php" style="text-transform: uppercase;"><b>View Message</b></a></li>
                <li><a href="#" style="text-transform: uppercase;" onclick='openForm()'><b>Change Password</b></a></li>
                    <li><a href="index.php"style="text-transform: uppercase;"><b>Logout</b></a></li>
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


    <br><br><br><br><br><br>
   
    
    <?php
    session_start();
    $sn = $_SESSION['user'];
    echo "<table border='2' cellspacing='10' cellpadding='10' width='80%' align='center' >
    <tr><td>S.No</td><td>User</td><td>User Query</td><td>Response</td><td>Reply</td></tr>";
    
    $q = "select * from chat where adminemail='$sn'";
    $r = mysqli_query($db,$q);
    $i=1;
    while($d = mysqli_fetch_assoc($r)){
        $id = $d['id'];
        $em = $d['useremail'];
      echo "<tr>";
      echo "<td>".$i++."</td>";
      echo "<td>".$d['useremail']."</td>";
      echo "<td>".$d['question']."</td>";
      echo "<td>".$d['answer']."</td>";
      echo "<td><a href='reply.php?id=$id&email=$em'>Reply</td>";
      echo "</tr>";
      
    }

    
    ?>

<?php 
      if(isset($_REQUEST['log'])) {
        // Retrieve form data
        $oldpass = $_REQUEST['oldpass'];
        $newpass = $_REQUEST['newpass'];

        $check = "select * from studentadmin where email='$sn'";
        $pr = mysqli_query($db,$check);

        while($n = mysqli_fetch_assoc($pr)){
            if($oldpass==$n['password']){
                $up = "UPDATE studentadmin SET password='$newpass' WHERE email = '$sn'";
                $ar = mysqli_query($db,$up);
                if($ar){
                    echo "<script>alert('Password Updated !! Thank you ".$n['name']."');</script>";                    
                    
                 }
                 else{
                  echo "<script>alert('error');</script>"; }



            }
            else{
                echo "<script>alert('Error Wrong Password!!');</script>";
                

            }


        }
        


          } 
      
      
            
      
      
      ?>

        <div id="popupForm" class="popup" style="background-color: #f1f1f1;">
            <h2>Update Your Details </h2>
            <form method="post">
              <label for="name" style="text-transform: uppercase;">old password</label>
              <input type="text" id="oldpass" name="oldpass"><br><br>

              <label for="name" style="text-transform: uppercase;">new password</label>
              <input type="text" id="newpass" name="newpass"><br><br>
              
              
              
             
              <center ><input type="submit" value="Submit" name="log" style="background-color: #45a049;"></center>
            </form>
            <br>
            <button onclick="closeForm()">Close</button>
          </div>


          <script>
    function openForm() {
      document.getElementById("popupForm").style.display = "block";
      document.getElementById("sect").style.overflow = "hidden";

    }

    function closeForm() {
      document.getElementById("popupForm").style.display = "none";
      document.getElementById("sect").style.overflow = "visible";
    }
  </script>

    



    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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