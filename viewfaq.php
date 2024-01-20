<html lang="en">
<?php
include("./connect.php"); // connection to db
error_reporting(0);




?>
  <head>
    <meta charset="utf-8" />
    <title>Frequently Asked Questions section - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
    <style type="text/css">
      .title1{
        text-transform: uppercase;
        font-weight: bolder;
        font-size: larger;
        margin-bottom: 20px;
        padding-top: 2px;
      }

      .title2{
        font-weight: 700;
        font-size: larger;
        margin-bottom: 20px;
      }
      
    </style>
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
  <body>
    <div class="faq_area section_padding_130" id="faq">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s">
              <h1 class="title1">Frequently  Asked Questions</h1>
              <p class="title2">
              Gritup provides comprehensive solutions to address all of your inquiries.
              </p>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <div class="accordion faq-accordian" id="faqAccordion">
              <?php
              $q = "select * from faq";
              $r = mysqli_query($db, $q);
              $i = 1;

              while ($d = mysqli_fetch_assoc($r)) {
              ?>
                <div class="card border-0 wow fadeInUp" data-wow-delay="<?php echo "0." . $i; ?>s">
                  <div class="card-header" id="heading<?php echo $i; ?>">
                    <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                      <?php echo $d['question']; ?><span class="lni-chevron-up"></span>
                    </h6>
                  </div>
                  <div class="collapse" id="collapse<?php echo $i; ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#faqAccordion">
                    <div class="card-body">
                      <?php echo $d['answer']; ?>
                    </div>
                  </div>
                </div>
              <?php
                $i++;
              }
              ?>
            </div>

            <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="<?php echo "0." . $i; ?>s">
              <i class="lni-emoji-sad"></i>
              <p class="mb-0 px-2">Can't find your answers?</p>
              <?php 
              
              if($sn=$_SESSION['user']){
                echo "<a href='./viewstudent1.php'> Contact us</a>";

              }else{
                echo "<a href='./viewstudent.php'> Contact us</a>";
              }
                
              
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
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
    
</html>
