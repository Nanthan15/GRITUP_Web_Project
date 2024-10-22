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
    <link type="text/css" href="css/network.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/network.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />








    
    


<style>
  body {
  
  overflow: visible;
  /* background-image: linear-gradient(#2980B9,#6DD5FA,#FFFFFF    ); */
}
    /* modified */
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(
          to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593
        );

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(
          to right,
          #ee7724,
          #d8363a,
          #dd3675,
          #b44593
        );
      }

      .gradient-form {
        margin: 20px;
      }

      

      @media (min-width: 768px) {
        .gradient-form {
          height: auto !important;
        }
      }
      @media (min-width: 769px) {
        .gradient-custom-2 {
          border-top-right-radius: 0.3rem;
          border-bottom-right-radius: 0.3rem;
        }
      }
      @media (max-width: 700px) {
        section {
          margin: 10px;
        }
      }
    /* end */
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
    </style>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>
<body style="background-image: linear-gradient(#3494e6, #ec6ead);">
    <?php
    session_start();
    if(isset($_REQUEST['log'])){
        $un = $_REQUEST['name'];
        $pa = $_REQUEST['pass'];

        
        $q = "select * from student where email='$un' and password='$pa'";
        $r = mysqli_query($db,$q);
        if($d=mysqli_fetch_assoc($r)){
            $_SESSION['user'] = $un;
            header("location:index1.html");
            exit();
        }

        else{
            echo "<div class='alert alert-dark' role='alert' style='border-radius:0px'>
            Incorrect email/password , Please <a href='signup.php' class='alert-link'>click here</a> to register
          </div>";
            // echo '<script>alert("User doesnt exist , please register")</script>';
        }
   
    }
?>
<br>
   
    <section class="h-100 gradient-form" >
      <div class="container py-2 h-100" style="padding-top: 41;">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <img src="design-3.png" style="width: 350px" alt="logo" />
                      
                    </div>
                    <br>

                    <form action="" method="post" >
                      <p>Please login to your account</p>

                      <div class="form-outline mb-4">
                        <div>Email</div>
                        <div>
                          <input
                            type="text"
                            name="name"
                            id="name"
                            required
                            
                          />
                        </div>
                      </div>

                      <div class="form-outline mb-4">
                        <div>Password</div>
                        <div>
                          <input
                            type="password"
                            name="pass"
                            id="pass"
                            required
                            
                          />
                        </div>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <input
                          class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                          
                         type="submit" value="Login" name="log">
                          
                      </input>
                        <a class="text-muted" href="#!">Forgot password?</a>
                      </div>

                      <div
                        class="d-flex align-items-center justify-content-center pb-4"
                      >
                        
                        <a href="signup.php" type="button"
                        class="btn btn-outline-danger">New User? SignUp</a>
                        
                      </div>
                    </form>
                  </div>
                </div>
                <div
                  class="col-lg-6 d-flex align-items-center gradient-custom-2"
                >
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">One Stop For All Diploma Resources</h4>
                    <p class="small mb-0">
                    GRITUP is a centralized hub aims to streamline the learning process,
                     by offering a diverse array of materials, tools, and support needed
                      for diploma programs. Students can access study guides, textbooks,
                       online lectures, practice exams, interactive learning modules,
                        and other relevant resources from a single platform. 
                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<div class="home">
    <button type="button" class="Home"><a href="index.php">Home</a></button>
</div>



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