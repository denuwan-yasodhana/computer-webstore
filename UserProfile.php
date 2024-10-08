<?php

include 'Connection.php';
require_once "controllerUserData.php"; 

if(isset($_SESSION['email'])){

  $email=$_SESSION['email'];

  $Squery="SELECT *FROM usertable where email='$email'";   // Error Correction --- table name
  if($result1 = mysqli_query($con, $Squery)) {
    echo "";
  }
  else{
      echo mysqli_error($con);
  }
  $userRow = mysqli_fetch_assoc($result1); 

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="Styles/UserProfile.css">

    <title>USER PROFILE</title>
</head>



<body>

    <div style="text-align: center; background-color: bisque;  font-family: 'georgia';">
    <br>
      <h1>Welcome to User Profile </h1>
     <br> 
  </div>

    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
                    <br><br>        <!--              *** navigation bar ****   This Section Deleted -->
                       
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                      <?php echo' <img src="img/'. $userRow['img'].'" alt="Admin" class="rounded-circle" width="150"> <!--image  Added Section-->';?>
                        <div class="mt-3">
                          <h4><?php echo $userRow["name"]?></h4>
                          <p class="text-secondary mb-1">Member Of Unique_X Family</p>
                          <hr>
                          
                  
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"> <svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M18.092,5.137l-3.977-1.466h-0.006c0.084,0.042-0.123-0.08-0.283,0H13.82L10,5.079L6.178,3.671H6.172c0.076,0.038-0.114-0.076-0.285,0H5.884L1.908,5.137c-0.151,0.062-0.25,0.207-0.25,0.369v10.451c0,0.691,0.879,0.244,0.545,0.369l3.829-1.406l3.821,1.406c0.186,0.062,0.385-0.029,0.294,0l3.822-1.406l3.83,1.406c0.26,0.1,0.543-0.08,0.543-0.369V5.506C18.342,5.344,18.242,5.199,18.092,5.137 M5.633,14.221l-3.181,1.15V5.776l3.181-1.15V14.221z M9.602,15.371l-3.173-1.15V4.626l3.173,1.15V15.371z M13.57,14.221l-3.173,1.15V5.776l3.173-1.15V14.221z M17.547,15.371l-3.182-1.15V4.626l3.182,1.15V15.371z"></path></svg> &ensp;<a href=" #" style="text-decoration: none;"> Dashboard  </a></h6>
                        <span class="text-secondary"></span>   <!--We can use for  website link-->
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg> &ensp;<a href="cart.php" style="text-decoration: none;"> Cart </a></h6>
                        <span class="text-secondary"></span> <!--We can use for  website link-->
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                          <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg> &ensp;<a href=" Tracking System/admin/UserTracking.php" style="text-decoration: none;"> Shipping </a></h6>
                        <span class="text-secondary"></span> <!--We can use for  website link-->
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M17.35,2.219h-5.934c-0.115,0-0.225,0.045-0.307,0.128l-8.762,8.762c-0.171,0.168-0.171,0.443,0,0.611l5.933,5.934c0.167,0.171,0.443,0.169,0.612,0l8.762-8.763c0.083-0.083,0.128-0.192,0.128-0.307V2.651C17.781,2.414,17.587,2.219,17.35,2.219M16.916,8.405l-8.332,8.332l-5.321-5.321l8.333-8.332h5.32V8.405z M13.891,4.367c-0.957,0-1.729,0.772-1.729,1.729c0,0.957,0.771,1.729,1.729,1.729s1.729-0.772,1.729-1.729C15.619,5.14,14.848,4.367,13.891,4.367 M14.502,6.708c-0.326,0.326-0.896,0.326-1.223,0c-0.338-0.342-0.338-0.882,0-1.224c0.342-0.337,0.881-0.337,1.223,0C14.84,5.826,14.84,6.366,14.502,6.708"></path></svg> &ensp;<a href=" #" style="text-decoration: none;"> Orders </a></h6>
                        <span class="text-secondary"></span> <!--We can use for  website link-->
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg class="svg-icon" width="24" height="24" viewBox="0 0 20 20"><path d="M17.237,3.056H2.93c-0.694,0-1.263,0.568-1.263,1.263v8.837c0,0.694,0.568,1.263,1.263,1.263h4.629v0.879c-0.015,0.086-0.183,0.306-0.273,0.423c-0.223,0.293-0.455,0.592-0.293,0.92c0.07,0.139,0.226,0.303,0.577,0.303h4.819c0.208,0,0.696,0,0.862-0.379c0.162-0.37-0.124-0.682-0.374-0.955c-0.089-0.097-0.231-0.252-0.268-0.328v-0.862h4.629c0.694,0,1.263-0.568,1.263-1.263V4.319C18.5,3.625,17.932,3.056,17.237,3.056 M8.053,16.102C8.232,15.862,8.4,15.597,8.4,15.309v-0.89h3.366v0.89c0,0.303,0.211,0.562,0.419,0.793H8.053z M17.658,13.156c0,0.228-0.193,0.421-0.421,0.421H2.93c-0.228,0-0.421-0.193-0.421-0.421v-1.263h15.149V13.156z M17.658,11.052H2.509V4.319c0-0.228,0.193-0.421,0.421-0.421h14.308c0.228,0,0.421,0.193,0.421,0.421V11.052z"></path></svg> &ensp;<a href="Build Pc.php" style="text-decoration: none;"> Build PC </a></h6>
                        <span class="text-secondary"></span> <!--We can use for  website link-->
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">User Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $userRow["username"]?>   <!--okkotama e wage enne database eka balal danna -->
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full  Name</h6>               <!-- Details-->
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <?php echo $userRow["name"]?>
                        </div>
                      </div>
                      <hr>
            
                      
                      
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <?php echo $userRow["email"]?>
                        </div>
                      </div>
                      <hr>
                      
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Password</h6>               
                        </div>
                        <div class="col-sm-9 text-secondary">
                          ************
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <?php echo $userRow["telephone"]?>
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $userRow["address"]?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Postal Code</h6>               <!-- Details-->
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $userRow["postalcode"]?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Country</h6>               
                        </div>
                        <div class="col-sm-9 text-secondary">
                              <?php echo $userRow["country"]?>
                        </div>
                      </div>
                      <hr>
                      
                      
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " target="_self" href="UserProfile_Edit.php">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
    
                </div>
              </div>
    
            </div>
        </div>
    
</body>



</html>