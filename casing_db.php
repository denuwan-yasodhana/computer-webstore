<?php

//fetch_data.php

include('itemdbcon.php');

// denuwan - add to cart button on click function



//






if(isset($_POST["action"]))
{
 $query = "SELECT * FROM products WHERE Category = 'casing' ";
 
  
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

   $output .= '
   <div class="col-xs-12 col-sm-4 col-lg-3">

    <div id="image" style="border:5px solid #ccc; align:center; border-radius:0px; overflow: hidden; padding:16px; margin-bottom:16px; height: auto;  background-image: linear-gradient(White,LightGray)">
     <table>
        <tr>
            <td><span class="'.$cl.'">'.$st.'</span></td>
        </tr>
        <tr>
            <td><img src="'. $row['Image'] .'" alt="" class="img-fluid" ></td>
        </tr>
        <tr >
            <td><div  style="font-size:15px; color:black; height="100px" width="100%"" ><p align="center" style="color:red;"><strong><a href="preview.php?i='.$row['ID'].'">'. $row['Name'] .'</a></strong></p></div></td>
        </tr>
        <tr>
            <td><h4 style="text-align:center;" class="text-danger" >'. $row['Price'] .' LKR</h4></td>
        </tr>
        <tr>
            <td><p style="color:black; font-weight:bold;" align="center">
     
            <!--Availability : '.$st.'<br />
            '. $row['Brand'] .' <br />-->
            
        </tr>
        <tr>
            <td><div class="text-center">
          
            <input type="hidden" name="product_id" value="<?php echo '. $row['ID'] .'; ?>">
            <input type="hidden" name="product_name" value="<?php echo '. $row['Name'] .'; ?>">
            <input type="hidden" name="product_price" value="<?php echo '. $row['Price'] .'; ?>">
            <input type="hidden" name="product_image" value="<?php echo'. $row['Image'] .'; ?>">
            <button type="button" onclick="add_to"class="btn btn-outline-primary" style="align:center; class="common_selector add_to_cart" name="add_to_cart"">Add to cart</button></div></td>
            
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
 echo $output;
}

?>

<style>
    #image:hover{
        transform: scale(1.1);
    }
</style>