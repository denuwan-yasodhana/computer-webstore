
<?php 
require_once "controllerUserData.php"; ?>

<?php

if(isset($_SESSION['email'])){

  $email = $_SESSION['email'];
  $password = $_SESSION['password'];

  if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
    $image=$fetch_info['img'];
    $uname=$fetch_info['username'];
}
    
}

?>

<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv = "X-UA-Compatible" content="IE=edge">
  <link rel="icon" href=""/>
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="Navigation.css">

  <style>
   #cart a:hover{
    color:#fec107;
   }
  
  </style>
  
</head>

<body>
  <div class="bg-accent" role="navigation">
    
    <div class="container-fluid">
      <div class="row align-items-center">
        
        <div class="col-lg-2 col-md-4 col-xs-12 text-white">
          <div class="row align-items-center justify-content-evenly text-center">
            <div class="col">
              <div class="py-3">
              <a href="First Page.php"><video width="100%" height="100%" autoplay loop muted>
                                        <source src="video/Black and white  Elegant Minimal Photographer Logo Video.mp4" type="video/mp4" />
                                        <source src="movie.ogg" type="video/ogg" />
                                        </video></a></a>

              </div>
            </div>
            
            <div class="col">
              <div class="py-3">
                <i class="fas fa-map-marker-alt"></i><br /><strong>Select Location</strong>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-8 col-md-4 col-xs-12">
          <div class="input-group">
            <select class="input-group-text" id="basic-addon1">
              <option>All</option>
              <option value="opt1">Option - 1</option>
              <option value="opt2">Option - 2</option>
              <option value="opt3">Option - 3</option>
              <option value="opt4">Option - 4</option>
            </select>
            
        <input type="text" autocomplete="off" style="height:45px;" class="form-control" placeholder="Search  Your Item" aria-label="Username" aria-describedby="basic-addon1" />
        <div class="result"></div>
        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "unix_store");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM products WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["name"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>
            
            <button class="btn btn-warning text-white input-group-text"><i class="fas fa-search"></i></button>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-4 col-xs-12">
          <div class="row text-white align-items-center justify-content-evenly text-center">
            <div class="col">
              
              <div class="py-3">

                <div class="col"><h1>        
                  <!-- SVG ICON -->
                
                
              </h1>
            
            </div>
            <?php
            
            if(isset($_SESSION['email'])){
            
            echo"
            <img src='img/$image' alt='Admin' class='rounded-circle' height='35' width='35'>
            
            <a href='UserProfile.php' style='color:white;' id='login' >
            Hello,.$uname.<br /><br>

            <button type='button'class='btn btn-light'><a href='logout-user.php'>Logout</a></button>
            
            ";
            

            }

            else{

           
            echo"<a href='login-user.php' style='color:white' id='login' >
            Hello, Sign in<br />
            <strong>Account &amp; Register</strong></a>
            ";


            }
            
            
            ?>
            </div>
            </div>
            <div class="col">
              <a href="cart.php" style="color:white;" id="cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
              
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>

                <!--<span class="badge bg-info" id="cartTotal"><?php //echo $row_count; ?></span>-->

              <?php
         
         $select_rows = mysqli_query($con, "SELECT * FROM cart WHERE CustomerEmail = '$email'") or die('query failed');

         $select_rows2 = mysqli_query($con, "SELECT * FROM custompc WHERE CustomerEmail = '$email'") or die('query failed');

         $row_count1 = mysqli_num_rows($select_rows);
         $row_count2 = mysqli_num_rows($select_rows2);

       ?>

       <span><?php echo $row_count1 + $row_count2; ?></span>
              </a>
              <!--<span class="badge bg-info" id="cartTotal">12</span>-->
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div id="secondNav" class="bg-warning">
      <div class="container-fluid">
        <div class="row  text-center">
          <div class="col"> <br>
            <div class="d-inline-block d-md-none p-2" data-bs-toggle="collapse" data-bs-target="#sideDrawer"><i class="fas fa-bars"></i> Menu</div>
            <div class="d-none d-lg-block d-md-block d-xl-block">
              <div class="d-inline-block"><a class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
              </svg> <strong>&ensp;All </strong></a></div>

        


              <!-- Example single danger button -->
<div class="btn-group">
<a href="">
  <button type="button" class="btn btn-dark">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
    <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
 </svg><strong>&ensp;Desktop</strong>
  </button>
          </a>
 
</div>

<path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
   

          

              <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
      <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
      </svg><strong>&ensp;Laptop</strong>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="item.php">Laptops</a></li>
    <li><a class="dropdown-item" href="#">Laptop Hard </a></li>
    <li><a class="dropdown-item" href="#">Laptop Cooler  </a></li>
    <li><a class="dropdown-item" href="#">Laptop Ram </a></li>
  </ul>
</div>

           

              <!-- Example single danger button -->
<div class="btn-group">
  <a href="monitor.php">
  <button type="button" class="btn btn-dark">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
      <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
    </svg><strong>&ensp;Monitor</strong>
  </button>
          </a>
</div>

                <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tablet" viewBox="0 0 16 16">
      <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
      <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg><strong>&ensp;Tablet</strong>
  </button>

</div>

         

              <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
      <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    </svg><strong>&ensp;Components</strong>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Processor</a></li>
    <li><a class="dropdown-item" href="motherboard.php"> Mother Board</a></li>
    <li><a class="dropdown-item" href="#">Graphic Card  </a></li>
    <li><a class="dropdown-item" href="#">Power Supply </a></li>
    <li><a class="dropdown-item" href="#">CPU Coolers </a></li>
    <li><a class="dropdown-item" href="casing.php">CPU Casings </a></li>
    <li><a class="dropdown-item" href="#">Desktop Ram</a></li>
    <li><a class="dropdown-item" href="#">UPS </a></li>
    <li><a class="dropdown-item" href="#">Storage devices </a></li>
    

  </ul>
</div>

          

              <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
      <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
      <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
    </svg><strong>&ensp;Gaming</strong>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Gamming Chair</a></li>
    <li><a class="dropdown-item" href="#">Gaming Console</a></li>
    <li><a class="dropdown-item" href="#"> Trimmer </a></li>
    <li><a class="dropdown-item" href="#">Backpacks </a></li>
  </ul>
</div>

         

              <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-mouse" viewBox="0 0 16 16">
                <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8a4 4 0 0 1-8 0V5a4 4 0 1 1 8 0v6zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
              </svg><strong>&ensp;Accessories</strong>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Mouse</a></li>
    <li><a class="dropdown-item" href="#">Keyboard </a></li>
    <li><a class="dropdown-item" href="#">Power Bank  </a></li>
    <li><a class="dropdown-item" href="#">Type C-Hub </a></li>
    <li><a class="dropdown-item" href="#"> Speaker</a></li>
    <li><a class="dropdown-item" href="#">Smart Speaker </a></li>
    <li><a class="dropdown-item" href="#">Portable Speaker </a></li>
    <li><a class="dropdown-item" href="#">Charger </a></li>
    <li><a class="dropdown-item" href="#">Pen Driver </a></li>
    <li><a class="dropdown-item" href="#">Memory Card </a></li>
    <li><a class="dropdown-item" href="#">Mouse Pad </a></li>
    <li><a class="dropdown-item" href="#">Game Pad </a></li>
    <li><a class="dropdown-item" href="#">Cable and Convertor </a></li>
    <li><a class="dropdown-item" href="#">Capture Card </a></li>
    <li><a class="dropdown-item" href="#">Sound Card </a></li>
  </ul>
</div>

            

                <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
      <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
      <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
      </svg><strong>&ensp;Official Equipments</strong>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Printor</a></li>
    <li><a class="dropdown-item" href="#">Projector </a></li>
    <li><a class="dropdown-item" href="#">Scanner  </a></li>
    <li><a class="dropdown-item" href="#">POS Printer </a></li>
    <li><a class="dropdown-item" href="#">Security Solution </a></li>
    <li><a class="dropdown-item" href="#">Toner </a></li>
    <li><a class="dropdown-item" href="#">Barcode Scanner </a></li>
    <li><a class="dropdown-item" href="#">Card Printer </a></li>
    <li><a class="dropdown-item" href="#">Document Printer </a></li>
    <li><a class="dropdown-item" href="#">Project Scanner </a></li>
  </ul>
</div>

            

                <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
      <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
      <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
      </svg><strong>&ensp;Router</strong>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Router</a></li>
    <li><a class="dropdown-item" href="#">Pocket Router </a></li>
    <li><a class="dropdown-item" href="#">Repeter  </a></li>
    <li><a class="dropdown-item" href="#">Modem </a></li>
    <li><a class="dropdown-item" href="#">Network Switch </a></li>
    <li><a class="dropdown-item" href="#">Receiver </a></li>
    <li><a class="dropdown-item" href="#">LAN Card </a></li>
  </ul>
</div>
              
            </div>
          </div>
        </div><br>
      </div>
    </div>
  </div>

  <div id="sideDrawer" class="collapse ps-3 pt-4">
    <div id="closeBtn" data-bs-toggle="collapse" data-bs-target="#sideDrawer"><i class="fas fa-times"></i></div>
    <div class=""><a class="nav-link text-dark"><strong>All</strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Desktop</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Laptop</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong<button type="button" class="btn btn-light" style="width: 100%;">Monitor</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Tablet</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Components</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Gaming</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Accessories</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Official Equipments</button></strong></a></div>
    <div class=""><a class="nav-link text-dark"><strong><button type="button" class="btn btn-light" style="width: 100%;">Router</button></strong></a></div>
    
  </div>


          </div>


</body>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>

</script>

</html>
