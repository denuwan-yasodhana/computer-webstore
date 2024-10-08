

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="style/style.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

            <link rel="stylesheet" href="style/owl.carousel.min.css">
            <link rel="stylesheet" href="style/owl.theme.default.min.css">
            <link rel="stylesheet" href="style/hover-min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

            <title>Unique X Computers</title>

                <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="style/owl.carousel.min.js"></script>
<style>
    #fl{
        font-family: monospace;
    }
</style>
</head>
<body>
    <?php include 'Navigation.php'; ?>
    <br>
    <hr>
    <h3 id="fl">&nbsp&nbspDiscount sales section</h3>
    <hr>
<div class="container">
<br>

      <?php

include('itemdbcon.php');



 $query = "SELECT * FROM products ORDER BY Date DESC Limit 8;";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
    
    $st = "Discount";
    $cl = "badge badge-success";
   $pr = "%10 Discount";
 
$output .= '

<div class="col-xs-12 col-sm-4 col-lg-3">

<div id="image" style="border:5px solid #ccc; align:center; border-radius:0px; overflow: hidden; padding:16px; margin-bottom:16px; height: auto;;  background-image: linear-gradient(White,LightGray)">
 <table>
 <tr height="25px"><td><span class="'.$cl.'">'.$st.'</span></td></tr>
        
<tr height="200px"><td><img src="'. $row['Image'] .'" alt="" class="img-fluid" ></td></tr>
        
<tr height="100px"> <td><div  style="font-size:15px; color:black; height="100px" width="100%"" ><p align="center" style="color:red;"><strong><a href="preview.php?i='.$row['ID'].'">'. $row['Name'] .'</a></strong></p></div></td></tr>
    
<tr height="25px"><td><h4 style="text-align:center;" class="text-danger" ><del>'. $row['Price'] .' LKR</del></h4></td></tr>     
<tr height="25px"><td><h4 style="text-align:center;" class="text-success" >'.$pr.' </h4></td></tr> 
    
   
        
<tr height="25px"><td><p style="color:black; font-weight:bold;" align="center">
 
<!--Availability : '.$st.'<br />
'. $row['Brand'] .' <br />-->
'. $row['Spec3'] .' GB<br />
'. $row['Spec2'] .' </p></td></tr>       
    
   <tr><td><div class="text-center">
      
   <input type="hidden" name="product_id" value="<?php echo '. $row['ID'] .'; ?>">
   <input type="hidden" name="product_name" value="<?php echo '. $row['Name'] .'; ?>">
   <input type="hidden" name="product_price" value="<?php echo '. $row['Price'] .'; ?>">
   <input type="hidden" name="product_image" value="<?php echo'. $row['Image'] .'; ?>">
   <button type="button" onclick="add_to"class="btn btn-outline-primary" style="align:center; class="common_selector add_to_cart" name="add_to_cart"">View item</button>
</div></td>
   </tr>     
       
        </table>
        <?php
    };
 };
 ?>
    
 
</div>
<br>
</div>
<br>



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
<br>
<?php include 'footer.php';?>
</body>
</html>