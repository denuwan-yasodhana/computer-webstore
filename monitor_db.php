<?php

//fetch_data.php

include('itemdbcon.php');

// denuwan - add to cart button on click function



//






if(isset($_POST["action"]))
{
 $query = "SELECT * FROM products WHERE Category = 'monitors' ";
 
  
 if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= " AND Price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
		
	}
 if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "AND Brand IN('".$brand_filter."') 
  ";
   
 }


 if(isset($_POST["storage"]))
 {
  $storage_filter = implode("','", $_POST["storage"]);
  $query .= "AND Spec2 IN('".$storage_filter."')
  ";
   
 }
 
 

 // denuwan
 if(isset($_POST["add_to_cart"])){

    //$CustomerEmail = $_SESSION["email"]; YATATATH DANNA
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $product_price = $_POST['product_price'];
    $product_quantity = 1;
 
    $query = "SELECT * FROM cart WHERE ProductName = '$product_name'";

    $res->execute();
    $num_rows = $res->fetchColumn();
    $query = "INSERT INTO cart(CustomerEmail, ProductID, ProductName, Quantity, ProductImage, Price) VALUES('ravindu.first@gmail.com', '$product_id', '$product_name', '$product_quantity', '$product_image', '$product_price ')";
    
 }

        

//
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {

    if($row['Quantity']==0){
        $st = "Out of stock";
        $cl = "badge badge-warning";
     }
     else{
        $st = "In stock";
        $cl = "badge badge-primary";
     }
    $id = $row['ID'];
    
    $sql2 = "SELECT * From rating WHERE Product_ID='$id'";
    $link = mysqli_connect('localhost', 'root', '', 'unix_store');
        $result2 = mysqli_query($link, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $rowcount=mysqli_num_rows($result2);
        $result3= mysqli_query($link,"SELECT SUM(Rating) AS totalsum FROM rating WHERE Product_ID='$id'");

        $row3 = mysqli_fetch_assoc($result3); 

        $sum = $row3['totalsum'];
        if($rowcount>0)
            {
                $rating = $sum/$rowcount;
            }
            else{
                $rating = 0;
            }

        if($rating>0){
            $res= '';
                for($i=0; $i<$rating; $i++){
                    
                    $res = $res.'<i class="fa-regular fa-star" style="font-size:25px;color:#1ABC9C" text-yellow></i>';
                }}
                else{
                    $res= "No ratings yet";
                }

   $output .= '

   <div class="col-xs-12 col-sm-4 col-lg-3">

    <div id="image" style="border:5px solid #ccc; align:center; border-radius:0px; overflow: hidden; padding:16px; margin-bottom:16px; height: auto;;  background-image: linear-gradient(White,LightGray)">
     <table>
     <tr height="25px"><td><span class="'.$cl.'">'.$st.'</span></td></tr>
            
    <tr height="200px"><td><img src="'. $row['Image'] .'" alt="" class="img-fluid" ></td></tr>
            
    <tr height="100px"> <td><div  style="font-size:15px; color:black; height="100px" width="100%"" ><p align="center" style="color:red;"><strong><a href="preview.php?i='.$row['ID'].'">'. $row['Name'] .'</a></strong></p></div></td></tr>
        
    <tr height="25px"><td><h4 style="text-align:center;" class="text-danger" >'. $row['Price'] .' LKR</h4></td></tr>      
        
    <tr height="25px"><td><span>'.$res.'</span> </td></tr>       
            
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
       <button type="button" onclick="add_to"class="btn btn-outline-primary" style="align:center; class="common_selector add_to_cart" name="add_to_cart"">Add to cart</button>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i> Quick View</button></div></td>
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
 echo $output;
}

?>

<style>
    #image:hover{
        transform: scale(1.1);
    }
</style>