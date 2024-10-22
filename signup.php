<!DOCTYPE html>
<html lang="en" style="color: #0abde3;"
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

      html{
        padding: 0;
        margin: 0;
        
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
    <title>SignUp</title>
</head>
<body>
<?php

if(isset($_REQUEST['log'])){
    $se = $_REQUEST['name'];
    $br = $_REQUEST['branch'];
    $sem = $_REQUEST['sem'];
    $em = $_REQUEST['email'];
    $pa = $_REQUEST['pass'];

    $a = "select * from student where email='$em' ";
    $b = mysqli_query($db,$a);
    $d=mysqli_fetch_assoc($b);

    if($d>0){
      echo "<div class='alert alert-dark' role='alert' style='border-radius:0px'>
              User <b>$d[name]</b> exists !! <a href='signin.php' class='alert-link'>click here</a> to login
            </div>";
    }
    else{
      $q = "insert into student (name,branch,semester,email,password) values('$se','$br','$sem','$em','$pa')";
      $r = mysqli_query($db,$q);
      if($r){
        echo "<div class='alert alert-dark' role='alert' style='border-radius:0px'>
              Register Success !! <a href='signin.php' class='alert-link'>click here</a> to login
            </div>";
      }
      else{
        echo "<div class='alert alert-dark' role='alert' style='border-radius:0px'>
            Register not Successfully !! connect admin to login
          </div>";
      // mysqli_query($con);
      }
      
   

  }
}
?>    
      


    <br>
   
    <section class="h-100 gradient-form" >
      <div class="container py-2 h-100"  style="padding-top: 41;">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10" >
            <div class="card rounded-3 text-black" >
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center">
                      <img src="design-3.png" style="width: 350px" alt="logo" />
                    </div>
                    <br />

                    <form method="post" action="" enctype="multipart/form-data">
                      <p style="font-size: larger">
                        <b>Please create an account</b>
                      </p>

                      <div>Student Name</div>
                      <div><input type="text" name="name" id="name" required/></div>
                      <div>Branch</div>
                      <div>
                        <select
                          name="branch"
                          style="height: 32px; width: 190px"
                        >
                          <option value="CS">CS</option>
                          <option value="EC">EC</option>
                          <option value="AU">AU</option>
                          <option value="ME">ME</option>
                        </select>
                      </div>

                      <div>Semester</div>
                      <div>
                        <select name="sem" style="height: 32px; width: 190px">
                          <option value="1st Sem">1st Sem</option>
                          <option value="2nd Sem">2nd Sem</option>
                          <option value="3rd Sem">3rd Sem</option>
                          <option value="4th Sem">4th Sem</option>
                          <option value="5th Sem">5th Sem</option>
                          <option value="6th Sem">6th Sem</option>
                        </select>
                      </div>

                      <div>Student Email</div>
                      <div><input type="email" name="email" id="email" required/></div>

                      <div>Password</div>
                      <div><input type="password" name="pass" id="pass" required /></div>

                      <br>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <input
                          class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                          type="submit" value="SignUp" name="log"
                        >
                          
                      </input>
                      </div>
                      

                      <div
                        class="d-flex align-items-center justify-content-center pb-4"
                      >
                        
                        <a href='signin.php' type="button" class="btn btn-outline-danger">Already Have account? Signin</a>
                        
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