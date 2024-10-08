<?php 
require "controllerUserData.php";




if(isset($_SESSION['email'])){

    $email = $_SESSION['email'];
} 

include 'Navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       #con{
        background-image: url('images/previewback.jpg');
        }

        #details{
            font-family: monospace;
        }
        #price:hover{
            transform:scale(1.1);
            color:brown;
        }
    </style>
    
</head>
<body>
    <div id="con">

    <?php

    $ID = $_GET['i'];
    $_COOKIE['ID'] = $ID;
    if (empty($ID)) {
        exit("Name is empty id a");
    } else {
        require 'config.php';
        $sql = "SELECT * From products WHERE ID='$ID'";
        
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $Image = $row['Image'];
        $price = $row['Price'];
        $Name = $row['Name'];
        $About = $row['About'];
        $Quantity = $row['Quantity'];
        $Availability = $row['Availability'];
        if($Availability==1){$Availability="Yes";}else{$Availability="No";}

        $sql2 = "SELECT * From rating WHERE Product_ID='$ID'";
        $result2 = mysqli_query($link, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $rowcount=mysqli_num_rows($result2);
        $result3= mysqli_query($link,"SELECT SUM(Rating) AS totalsum FROM rating WHERE Product_ID='$ID'");

        $row3 = mysqli_fetch_assoc($result3); 

        $sum = $row3['totalsum'];
        if($rowcount>0)
            {
                $rating = $sum/$rowcount;
            }
            else{
                $rating = 0;
            }
       

    }
    
    if(isset($_POST['button1'])){

        
        $ID = $_GET['i'];
        $sql = "SELECT * From sales WHERE Product_ID='$ID'";
        
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $s ='1';

        if($row==null){
            $query = mysqli_query($link, "INSERT INTO sales(Product_ID,sales) VALUES('$ID','$s')");
        }
        else{
            $sql = "SELECT * From sales WHERE Product_ID='$ID'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            $sale = $row['sales'];
            $update_value = $sale + '1';
            $query = mysqli_query($link, "UPDATE `sales` SET sales = '$update_value' WHERE Product_ID = '$ID'");
        }


    }
    // if(array_key_exists('button1', $_POST)) 

    if(isset($_POST['button1'])){
    if($email==null){
        echo "<script type='text/javascript'>
$(document).ready(function(){
$('#Modal').modal('show');
});
</script>";
        
    }
    else{
        
    
        $ID = $_GET['i'];
        
        echo $ID;
         $sql = "SELECT * From products WHERE ID='$ID'";
         
         $result = mysqli_query($link, $sql);
         $row = mysqli_fetch_assoc($result);
         $Image = $row['Image'];
         $price = $row['Price'];
         $Name = $row['Name'];
         $Quantity = 1;
     
         $query = mysqli_query($link, "INSERT INTO cart(CustomerEmail, ProductID, ProductName, Quantity, ProductImage, Price) VALUES('$email', '$ID', '$Name', '$Quantity', '$Image', '$price')");
          
    }};


    
    // setting rate value
    if(isset($_POST['review'])){
        $rate = $_POST["rate"];
    if($email==null){
        echo "<script type='text/javascript'>
$(document).ready(function(){
$('#Modal').modal('show');
});
</script>";
        
    }
    else{
   
    $ID = $_GET['i'];
    
    $query = mysqli_query($link, "INSERT INTO rating(Product_ID, Rating, email) VALUES('$ID','$rate','$email')");  
   }};
    // add rate to the db
    if(array_key_exists('review', $_POST)) {
        
        echo $rate;
         
    };
    
    ?>

<br>
<div class="container first" >
<h2><?php echo $Name?></h2><br>
<div class="row" style="margin-top: 5px;">

    <div class="col-md-6">
        <img src="<?php echo $Image?>" width="500px">
    </div>

    <div class="col-md-6" id="details">
        <br>
         
         <br>
         <div class=descrip>
           <p>
                <i class="bi bi-cash"></i>
                <h2 id="price"><b>Rs: <span ><?php echo $price?></span> /=</b></h2>
           </p>
           <p>
                <i class="bi bi-box"></i>

                <?php
                if($rating>0){
                    for($i=0; $i<$rating; $i++){
                        echo '<i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>';
                        
                    }}
                    else{
                        echo "No ratings found";
                    }
                ?>
                
           </p>
           <p>
                <i class="bi bi-box"></i>
                Stock: <?php if($Quantity<1){echo "Out of Stock";}else{echo $Quantity;}?>
           </p>
           <p>
                <i class="bi bi-box-seam"></i>
                Availability: <?php echo $Availability?>
           </p>
           <p>
                <i class="bi bi-box-seam"></i>
                <?php echo $About?>
           </p>

           <br>
        
        </div>
        <div> <form method="post">
        <input type="submit" name="button1"
                class="btn btn-primary btn-lg btn-block" value="Add to Cart" />
                <button type="button" name="rate" class="btn btn-secondary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Rate the Product
</button>
          
       
    </form></div>
    </div>
</div>
</div>


<br><br>

    <?php include 'footer.php';?>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate the product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Rate the product</h5>
                    <!-- radio -->
                    <form method="post">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="inlineRadio1" value="1" name="rate"> 
                    <label class="form-check-label" for="inlineRadio1">
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    </label>
                    </div><br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="inlineRadio2" value="2" name="rate">
                    <label class="form-check-label" for="inlineRadio2">
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    </label>
                    </div><br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="inlineRadio3" value="3" name="rate">
                    <label class="form-check-label" for="inlineRadio3">
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    </label>
                    </div><br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio4" value="4"  name="rate">
                    <label class="form-check-label" for="inlineRadio4">
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    </label>
                    </div><br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="inlineRadio5" value="5" name="rate" >
                    <label class="form-check-label" for="inlineRadio5">
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    <i class="fas fa-star" style="font-size:35px;color:yellow" text-yellow></i>
                    </label>
                    </div><br>

                    

                    <!-- end radio -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="review">Rate</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- log modal -->

<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login required</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Please Log in to proceed !</h5>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="login-user.php"><button type="button" class="btn btn-primary" >Log In</button></a>
                </div>
                    
    </div>
  </div>
</div>
<!-- log -->

</body>
</html>

