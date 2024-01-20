<!DOCTYPE html>
<html lang="en">
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<style>
  .gradient-custom {
    /* fallback for old browsers */
    background: #f6d365;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
    }

html, .vh-100{
    background-color: rgb(99, 100, 104);
}

.profilebutton{
    background-color: black;
    color: white;
}


/* popup */
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

  select[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  button {
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    background-color: #d32f2f;
  }




</style>
<body>
<?php
    session_start();
    $sn = $_SESSION['user'];
    //echo "<script>alert('$sn')</script>";
    ?>
    <section class="vh-100" id="sect" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-8 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">

                <?php
                  
                  $q = "select * from student where email='$sn'";
                  $r = mysqli_query($db,$q);
                  $i=1;
                  while($d = mysqli_fetch_assoc($r)){
                      
                      
                       

                      echo "<div class='col-md-4 gradient-custom text-center text-white'
                      style='border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;'>
                      <img src='./user.png'
                        alt='Avatar' class='img-fluid my-4' style='width: 120px; border-radius: 70px;' style='margin-bottom:40px;' />
                      <h5>".$d['name']."</h5>
                      <p>Student</p>
                      <button class='profilebutton' onclick='openForm()'>Edit Profile</button>
                      <a href='index.php'><button class='profilebutton' >Logout</button></a>
                      
                    </div>
                    <div class='col-md-8'>
                      <div class='card-body p-4'>
                        <h6>User Information</h6>
                        <hr class='mt-0 mb-4'>
                        <div class='row pt-1'>
                          <div class='col-6 mb-3'>
                              <h6>Name</h6>
                              <p class='text-muted'>".$d['name']."</p>
                          </div>
                          <div class='col-6 mb-3'>
                              <h6>User_ID</h6>
                              <p class='text-muted'>".$d['id']."</p>
                          </div>
                          <div class='col-6 mb-3'>
                            <h6>Email</h6>
                            <p class='text-muted'>".$d['email']."</p>
                          </div>
                          <div class='col-6 mb-3'>
                            <h6>Phone</h6>
                            <p class='text-muted'>+91 866XXXXXXX</p>
                          </div>
                        </div>
                        <h6>Education Info</h6>
                        <hr class='mt-0 mb-4'>
                        <div class='row pt-1'>
                          <div class='col-6 mb-3'>
                            <h6>College</h6>
                            <p class='text-muted'>PES Polytechnic</p>
                          </div>
                          <div class='col-6 mb-3'>
                            <h6>Current Qualification</h6>
                            <p class='text-muted'>Diploma</p>
                          </div>
                          <div class='col-6 mb-3'>
                              <h6>Stream</h6>
                              <p class='text-muted'>".$d['branch']."</p>
                          </div>
                          <div class='col-6 mb-3'>
                              <h6>Semester</h6>
                              <p class='text-muted'>".$d['semester']."</p>
                          </div>
                          <a href='./index1.html'><button class='profilebutton' >Return to Home Page </button></a>
                        </div>
                        
                      </div>
                    </div>";
                  }
                  ?>


                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
      <br>
      </section>

      <?php 
      if(isset($_REQUEST['log'])) {
        // Retrieve form data
        $name = $_REQUEST['name'];
        $branch_U = $_REQUEST['branch'];
        $sem_U = $_REQUEST['sem'];

        $up = "UPDATE student SET name='$name', branch='$branch_U', semester='$sem_U' WHERE email = '$sn'";
          
        $ar = mysqli_query($db,$up);
        $i=1;
        if($ar){
          echo "<script>alert('Profile Updated');</script>";
          
          
       }
       else{
        echo "<script>alert('error');</script>";
        
        
        //   mysqli_query($db);
       }


          }

      
      
      
      
      
      
      
      
      
      ?>

          <div id="popupForm" class="popup">
            <h2>Update Your Details </h2>
            <form method="post">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name"><br><br>
              <label for="branch">Branch:</label> 
              <select name="branch" id="branch" name="branch" type="text">
                <option value="CS">CS</option>
                <option value="EC">EC</option>
                <option value="AU">AU</option>
                <option value="ME">ME</option>
              </select>
              
              <br><br>
              <label for="sem"> Sem:</label>

              <select name="sem" type="text" id="sem" name="sem">
                <option value="1st Sem">1st Sem</option>
                <option value="2nd Sem">2nd Sem</option>
                <option value="3rd Sem">3rd Sem</option>
                <option value="4th Sem">4th Sem</option>
                <option value="5th Sem">5th Sem</option>
                <option value="6th Sem">6th Sem</option>
              </select><br><br>
             
              <center ><input type="submit" value="Submit" name="log"></center>
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
</body>
</html>