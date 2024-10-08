<?php

$conn = mysqli_connect('localhost', 'root', '', 'unix_store') or die('connection failed');

require_once "controllerUserData.php"; 
if(isset($_SESSION['email'])){

   $email = $_SESSION['email'];
 
   $email = $_SESSION['email'];
   $password = $_SESSION['password'];
   if($email != false && $password != false){
      $sql = "SELECT * FROM usertable WHERE email = '$email'";
      $run_Sql = mysqli_query($con, $sql);
      if($run_Sql)
      {
         $fetch_info = mysqli_fetch_assoc($run_Sql);
         $uname=$fetch_info['username'];
         
         $status = $fetch_info['status'];
         $code = $fetch_info['code'];
         if($status == "verified")
         {
               if($code != 0)
               {
                  header('Location: reset-code.php');
               }
         }
         else
         {
               header('Location: user-otp.php');
         }
      }
   }
}

if (isset($_GET['remove'])) {
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");

   // To redirect to the cart.php
   header('location:cart.php');
};

if (isset($_GET['delete_all'])) {
   mysqli_query($conn, "DELETE FROM `cart`");

   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <!--To get Icons-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/cart_style.css">

</head>

<body>

   <!--Change-->
   <div> <?php include 'Navigation.php'; ?></div>
  
<!-- content -->
   <div class="container">
      <section class="shopping-cart">
         <h1 class="heading">shopping cart</h1>
         <table>
            <thead>
               <th>image</th>
               <th>name</th>
               <th>price</th>
               <th colspan="2">quantity</th>
               <th>total price</th>
               <th>action</th>
            </thead>
            <tbody>
               <?php

               // Change

               $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE CustomerEmail = '$email'");
               $grand_total = 0;
               if (mysqli_num_rows($select_cart) > 0) {
                  // Set table according to the row 
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) 
                  {
               ?>

                     <tr>
                        <td>
                           <img src="<?php echo $fetch_cart['ProductImage']; ?>" height="100" alt="">
                        </td>
                        <td>
                           <?php echo $fetch_cart['ProductName']; ?>
                        </td>
                        <td>
                           <?php echo number_format($fetch_cart['Price']); ?>
                        </td>
                        <form action="" method="post">
                        <td>
                          
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['ID']; ?>">
                              <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['Quantity']; ?>">
                              
                           
                        </td>
                        <td>
                        <input type="submit" value="update" name="update_update_btn">
                        </td>
                        </form>
                        <td>
                           <?php echo $sub_total = $fetch_cart['Price'] * $fetch_cart['Quantity']; ?>
                        </td>
                        <td>
                           <a href="cart.php?remove=<?php echo $fetch_cart['ID']; ?>" onclick="return confirm('Remove item from Cart?')" class="delete-btn" style="text-decoration: none;"> <i class="fas fa-trash"></i> remove</a>
                        </td>
                     </tr>


               <?php
                     $grand_total += $sub_total;
                  };
               };
               ?>

               <?php

                  $select_cart2 = mysqli_query($conn, "SELECT * FROM `custompc` WHERE CustomerEmail = '$email'");

                  if (mysqli_num_rows($select_cart2) > 0)
                  {
                     while ($fetch_cart = mysqli_fetch_assoc($select_cart2))
                     {
                        ?>
                           <tr>
                              <td>
                                 <img src="<?php echo $fetch_cart['Image']; ?>" height="100" alt="">
                              </td>
                              <td>
                                 <?php echo $fetch_cart['Name']; ?>
                              </td>
                              <td>
                                 <?php echo number_format($fetch_cart['Price']); ?>
                              </td>
                              <td>
                                 <form action="" method="post">
                                    <input type="number" name="update_quantity" min="1" max ="1" value="1">
                                 </form>
                              </td>
                              
                              <td>
                                 <?php echo $sub_total = $fetch_cart['Price']; ?>
                              </td>
                              <td>
                                 <a href="cart.php?remove=<?php echo $fetch_cart['ID']; ?>" onclick="return confirm('Remove item from Cart?')" class="delete-btn" style="text-decoration: none;"> <i class="fas fa-trash"></i> remove</a>
                              </td>
                           </tr>
               <?php
                     $grand_total += $sub_total;
                  };
               };
               ?>

               

               <tr class="table-bottom">
                  <td>
                     <a href="products.php" class="option-btn" style="margin-top: 0;  text-decoration: none; ">continue shopping</a>
                  </td>
                  <td colspan="2"></td>
                  <td colspan="2">
                     grand total
                  </td>
                  <td>

                     <?php
                     echo $grand_total;
                     ?>

                  </td>
                  <td>
                     <a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn" style="text-decoration: none;"> <i class="fas fa-trash"></i> delete all </a>
                  </td>
               </tr>

            </tbody>

         </table>
         <!--  -->


         
         <!--  -->

         <div class="checkout-btn">
            <!--Disable when grand total = 0 -->
            <form action='https://testpayment.directpay.lk/C6P2BKQ8N6' method='get'> 

<input name='submit' type='image'

src='https://cdn.directpay.lk/dev/assets/pay_directpay.png'

style='width:200px;' value='Pay Now' <?= ($grand_total > 1) ? '' : 'disabled'; ?> >
</form>
         </div>
      </section>
   </div>

   <!--Set Alert box-->
   <script>
      function Message() {
         alert("Products are not available for this quantity.");
      }

      <?php
      if (isset($_POST['update_update_btn'])) 
      {
         $update_value = $_POST['update_quantity'];
         $update_id = $_POST['update_quantity_id'];

         $stock_quantity = mysqli_query($conn, "SELECT `Quantity` FROM `products` WHERE id = '$update_id'");

         if ($update_value <= $stock_quantity) 
         {
            $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");

            if ($update_quantity_query) 
            {
               header('location:cart.php');
            };
         } 
         else 
         {
            echo "Message()";
         }
      };
      ?>
   </script>

<div> <?php include 'Footer.php'; ?></div>

</body>

</html>