


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    

   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href=""/>
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!--  -->
  
<!--  -->
    <link rel="stylesheet" href="Styles/First Page.css">
    
    <style>
        #F-catogory h1:hover {
          transform: scale(1.5);
          color:#000066;
        }
        #image:hover {
          transform: scale(1.1);
          
        }
        *{padding:0;margin:0;}

body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	background-color:#CCC;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#1598F2;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
  font-size: 25px;
	margin-top:20px;
}
#bot{
        position: fixed;
        right: 30px;
        bottom:40px;
      }
      </style>
    <title>First Page</title>
</head>
<body>

<?php  include 'Navigation.php';?> <!-- ========================   Navigation  =========================== -->
<a href="bot.php"><img id="bot" src="img/comments.png" style="height: 50px;"></a>

<br><br><br>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"  >
        <div class="carousel-inner" style="width: auto; height: 475px;">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="Images/Picture 3.png" class="d-block w-100" alt="Picture 3.png">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="Images/Picture 2.png" class="d-block w-100" alt="Picture 2.png">
          </div>
          <div class="carousel-item">
            <img src="Images/Picture 1.png" class="d-block w-100" alt="Picture 1.png">
          </div>
          <div class="carousel-item">
            <img src="Images/Picture 4.png" class="d-block w-100" alt="Picture 4.png">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  </div>  


      <!-- end of the  slide-->
        <br> <br>  

      <div class="container overflow-hidden" style="max-width: 100%;"><br><br>
        <div class="row gx-5" >
          <div class="col" style="padding-left:80px ;padding-right:40px ;">
           <div class="p-3 border bg-light" style="text-align:center;border-radius: 100px; background-image: url(Images/photo-1555680202-c86f0e12f086.jpg); background-attachment: fixed"><br><br>
            <div class="zoom-in-out-box" >  <a href="Build Pc.php"  style="text-decoration: none;">    B U I L D &ensp; P C </a></div><br><br></div>
           <div class="zoom-in-out-box"></div>
          </div>
          <div class="col"style="padding-left:40px ;padding-right:80px ;">
            <div class="p-3 border bg-light" style="text-align:center; border-radius: 100px;background-image: url(Images/01-trident-z5-rgb-black-2_large.jpg );background-attachment: fixed"><br><br>
              <div class="zoom-in-out-box "> <a href="sales.php"  style="text-decoration: none;">  S A L E S  </a> </div><br><br></div>
          </div>
        </div><br><br>
      </div>           <!-- Sales and build section-->

      <div id="F-catogory">
            <h1> Featured category</h1>
            <p>Check & Get Your Desired Product from Featured Category! </p>

      </div>      

      <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-1 g-lg-3">
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=desktop"  style="text-decoration: none;">   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
              <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
            </svg> <br> Desktop</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=laptop" style="text-decoration: none;">   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
              <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
            </svg> <br>  Laptop</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=monitors"  style="text-decoration: none;">   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> <br> Monitor</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=tablets"  style="text-decoration: none;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tablet" viewBox="0 0 16 16">
              <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
              <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>  <br> Tablet</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=graphics"  style="text-decoration: none;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gpu-card" viewBox="0 0 16 16"> <path d="M4 8a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm7.5-1.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"/> <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .5.5V4h13.5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5H2v2.5a.5.5 0 0 1-1 0V2H.5a.5.5 0 0 1-.5-.5Zm5.5 4a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5ZM9 8a2.5 2.5 0 1 0 5 0 2.5 2.5 0 0 0-5 0Z"/> <path d="M3 12.5h3.5v1a.5.5 0 0 1-.5.5H3.5a.5.5 0 0 1-.5-.5v-1Zm4 1v-1h4v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5Z"/> </svg>  
            <br>  Graphics</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=motherboard"  style="text-decoration: none;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-motherboard-fill" viewBox="0 0 16 16"> <path d="M5 7h3V4H5v3Z"/> <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2H1Zm11 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm2 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM3.5 10a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6Zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6ZM4 4h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0V3a1 1 0 0 0-1 1Zm7 7.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5Z"/> </svg>
              <br> Motherboard</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=cooling"  style="text-decoration: none;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mouse" viewBox="0 0 16 16">
              <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm4 8a4 4 0 0 1-8 0V5a4 4 0 1 1 8 0v6zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5z"/>
            </svg>  <br>  Cooling</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=casing"  style="text-decoration: none;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
              <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
              <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
            </svg> <br>  Casing</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="featured.php?i=storage"  style="text-decoration: none;">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
              <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
              <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
            </svg> <br>  Storage</a></div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">  <a href="\"  style="text-decoration: none;">   <br>  ....</a></div>
          </div>
        </div>
      </div> <br><br>      


      <div id="F-catogory">
            <h1> Featured items</h1>
            <p>Discover most outstanding items here </p>

      </div> 
      
      <div class="container">
      <?php

include('itemdbcon.php');



 $query = "SELECT * FROM products WHERE ID IN(SELECT Product_ID from sales ORDER BY sales)  LIMIT 3;";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="col-xs-12 col-sm-4 col-lg-4">

    <div style="border:5px solid #ccc; align:center; border-radius:0px; overflow: hidden; padding:16px; margin-bottom:16px; height: auto;;  background-image: linear-gradient(White,LightGray)" id="image">
     <table>
        <tr>
            <td><img src="'. $row['Image'] .'" alt="" class="img-fluid" id="image"></td>
        </tr>
        <tr >
            <td><div  style="font-size:15px; color:black; height="100px" width="100%"" ><p align="center" style="color:red;"><strong><a href="#">'. $row['Name'] .'</a></strong></p></div></td>
        </tr>
        <tr>
            <td><h4 style="text-align:center;" class="text-danger" >'. $row['Price'] .' LKR</h4></td>
        </tr>
        <tr>
            <td><p style="color:black; font-weight:bold;" align="center">
     
            
            '. $row['Brand'] .' <br />
            
        </tr>
        <tr>
            <td><div class="text-center">
          
            <input type="hidden" name="product_id" value="<?php echo '. $row['ID'] .'; ?>">
            <input type="hidden" name="product_name" value="<?php echo '. $row['Name'] .'; ?>">
            <input type="hidden" name="product_price" value="<?php echo '. $row['Price'] .'; ?>">
            <input type="hidden" name="product_image" value="<?php echo'. $row['Image'] .'; ?>">
            <a href="preview.php?i='.$row['ID'].'"><button type="button" onclick="add_to"class="btn btn-outline-primary" style="align:center; class="common_selector add_to_cart" name="add_to_cart"">View item</button></a></div></td>
            
            <?php
        };
     };
     ?>
        </tr>
     </table>
 
    </div>

   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>No matches</h3>';
 }


 


?>

<div class="col-md-12">
<br/>
   <div class="row filter_data">
      <?php echo $output;?>
   </div>
</div>

      </div>
</div>
      <!--<div class="container overflow-hidden">
        <div class="row gx-5" >
          
          <div class="col"  >
           <div class="p-3 border bg-light" style="width: 300px; height: 450px;" >
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
              <div class="carousel-inner" >
                <div class="carousel-item active" >
                  <a href="\ "> <img src=" Images/intel-budget-pc-sub-web-2-310x455.png" class="d-block w-100" alt="... " width="300px"; height="450px"> </a>
                </div>
                <div class="carousel-item">
                  <a href="\ "><img src="Images/amd-budget-pc-sub-web-2 (1)-310x455.png" class="d-block w-100" alt="..."width="300px"; height="450px"> </a>
                </div>
                
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
           </div>
          </div>

          <div class="col">
            <a href="\"><div id="P-3-1" class="p-3 border bg-light" style="width: 400px; height: 450px; background-image:url(Images/bloody-g300.jpg); color: aliceblue; text-align: center;"> <div style="padding: 60px 0px 0px 0px;font-family: cursive;"><h2>A4TECH BLOODY G300</h2> <P>Comfort glare gaming headphone</P></div></div></a>
          </div>

          <div id="P-3-2" class="col">
            <a href=" \"> <div class="p-3 border bg-light" style="width: 400px; height: 450px; background-image:url(Images/gamingpc.jpg) ;color: aliceblue;"><div style="padding: 60px 0px 0px 0px; font-family: cursive;"><h2>GAMING PC PRICELIST</h2><P>Click Here</P></div></div></a>
          </div>
        </div>
      </div>-->
<br>
<div>
    <?php  include 'Footer.php';?> <!-- ========================   Footer  =========================== -->
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog box">
    
      <!-- Modal content-->
<!-- Button trigger modal -->


<!-- Modal -->

      
</body>
</html>