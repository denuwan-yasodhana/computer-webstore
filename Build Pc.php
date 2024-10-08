<?php
require "config.php";
require_once "controllerUserData.php";

if(isset($_SESSION['email'])){

  $email = $_SESSION['email'];
  

}
  // Initialize the session
  
  
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      $logediin=false;
  }else{
    $logediin=true;
  }

  

  $sql1 = "SELECT ID,Name,Price,Image,Spec1 AS Socket FROM products WHERE Category = 'proccessor'";//
  $sql2 = "SELECT ID,Name,Price,Image,Spec1 AS Socket,Spec2 AS hard,Spec3 AS ram,Spec4 AS pci  FROM products WHERE Category = 'motherboard'";//
  $sql3 = "SELECT ID,Name,Price,Image,Spec1 AS ddr FROM products WHERE Category = 'ram'";//
  $sql4 = "SELECT ID,Name,Price,Image,Spec2 AS interface FROM products WHERE Category = 'storage' AND Spec1=('DESKTOP' OR 'BOTH') ";
  $sql5 = "SELECT ID,Name,Price,Image,Spec1 AS chip,Spec2 AS pci,Spec4 AS watt FROM products WHERE Category = 'graphics'";//
  $sql6 = "SELECT ID,Name,Price,Image,Spec1 AS Socket FROM products WHERE Category = 'cooling'";
  $sql7 = "SELECT ID,Name,Price,Image,Spec3 AS watt FROM products WHERE Category = 'power'";//
  $sql8 = "SELECT ID,Name,Price,Image,Spec1 AS size FROM products WHERE Category = 'casing'";

  // $proccessoer =array(array());
  // $motherboard =array(array());


  
  if($result1 = mysqli_query($link,$sql1)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

  if($result2 = mysqli_query($link,$sql2)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

  if($result3 = mysqli_query($link,$sql3)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

  if($result4 = mysqli_query($link,$sql4)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

  if($result5 = mysqli_query($link,$sql5)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

  if($result6 = mysqli_query($link,$sql6)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

  if($result7 = mysqli_query($link,$sql7)) {
  }
  else{
      echo "not".mysqli_error($link);
  }
  if($result8 = mysqli_query($link,$sql8)) {
  }
  else{
      echo "not".mysqli_error($link);
  }

?>



<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @font-face {
            src: url(font/NEWACADEMY.ttf);
            font-family: NEWACADEMY;
            font-weight: bold;
          }
          .neww{
            background-color: green;
            color: black;
          }
          form .form-control{
            pointer-events: none;
          }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/assemble/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <link rel="stylesheet" href="style/owl.carousel.min.css">
    <link rel="stylesheet" href="style/owl.theme.default.min.css">

    <title>Unique x Computers</title>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="style/owl.carousel.min.js"></script>

</head>
<body>
  <?php include('Navigation.php') ?>
<div class="col-12" >
        
        <table class="table table-hover">

            <tbody>
              <tr>
                <td scope="row" onclick = "replace()" style="text-align:center;"> <img id="photo_pro"  src="Images/cpu.png" alt="" width="80" height="80" ><br>CPU </td> 
                <td scope="row" onclick = "replace1()" style="text-align:center;">  <img id="photo_mbd" src="Images/motherboard.png" alt="" width="80" height="80"><br>Motherboard </td>    
                <td scope="row" onclick = "replace2()" style="text-align:center;">  <img id="photo_ram" src="Images/memory.png" alt="" width="80" height="80"> <br>emory</td> 
                <td scope="row" onclick = "replace6()" style="text-align:center;">  <img id="photo_stg" src="Images/hard-drive.png" alt="" width="80" height="80"><br>Storage </td> 
                <td scope="row" onclick = "replace3()" style="text-align:center;">  <img id="photo_gpu" src="Images/graphic-card.png" alt="" width="80" height="80"><br>Video Card </td>
                <td scope="row" onclick = "replace7()" style="text-align:center;">  <img id="photo_col" src="Images/fan.png" alt="" width="80" height="80"><br>CPU Cooler </td>  
                <td scope="row" onclick = "replace5()" style="text-align:center;">  <img id="photo_pow" src="Images/power-supply.png" alt="" width="80" height="80"> <br>Power Supply</td> 
                <td scope="row" onclick = "replace4()" style="text-align:center;">  <img id="photo_cas" src="Images/cpu (1).png" alt="" width="80" height="80"> <br>Case</td> 
                
                
     
              </tr>

             

       <!--       <tr>
                <td scope="row" > CPU </td> 
                <td scope="row" > Motherboard </td>    
                <td scope="row" > Memory</td> 
                <td scope="row" > Video Card </td> 
                <td scope="row"  > Case</td> 
                <td scope="row"  > Power Supply</td> 
                <td scope="row"  > Storage </td> 
                <td scope="row"  > CPU Cooler </td> 
     
              </tr>
    
              <tr>
                <td scope="row" onclick = "replace1()"> <a href="#"> </a> <img src="Images/motherboard.png" alt="" width="80" height="80">Motherboard </td>    
              </tr>
    
              <tr>
                <td scope="row" onclick = "replace2()" > <a href="#"> </a> <img src="Images/memory.png" alt="" width="80" height="80"> Memory</td> 
              </tr>

              <tr>
                <td scope="row" onclick = "replace3()" > <a href="#"> </a> <img src="Images/graphic-card.png" alt="" width="80" height="80">Video Card </td> 
              
              </tr>

              <tr>
                <td scope="row" onclick = "replace4()" > <a href="#"> </a> <img src="Images/cpu (1).png" alt="" width="80" height="80"> Case</td> 
              
              </tr>

              <tr>
                <td scope="row" onclick = "replace5()" > <a href="#"> </a> <img src="Images/power-supply.png" alt="" width="80" height="80"> Power Supply</td> 
              
              </tr>

              <tr>
                <td scope="row" onclick = "replace6()" > <a href="#"> </a> <img src="Images/hard-drive.png" alt="" width="80" height="80">Storage </td> 
              
              </tr>

              <tr>
                <td scope="row" onclick = "replace7()" > <a href="#"> </a> <img src="Images/fan.png" alt="" width="80" height="80">CPU Cooler </td> 
             
              </tr>

              <tr>
                <td scope="row" onclick = "replace8()" > <a href="#"> </a> <img src="Images/system.png" alt="" width="80" height="80"> Operating System</td> 
              </tr>

              <tr>
                <td scope="row" onclick = "replace9()" > <a href="#"> </a> <img src="Images/adapter.png" alt="" width="80" height="80"> Accessories</td> 
              </tr>  -->

              
    
    
            </tbody>
          </table>

    </div>


<div class="col-12" >
  
<!-- processor ---->
<div class="row">
    <div class="col-12"><br></div>
    <div class="col-md-2"></div>
    <div class="col-md-4" > 
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_pro()" class="btn btn-danger btn-lg btn-block" id="DropBtn_pro" style="color:black;"><img id="photo_pro"  src="Images/cpu.png" alt="" width="80" height="80" ><br>CPU</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_pro" onmouseleave="BackToNormal_pro()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                      /*  function BackToNormal_pro(){
                          document.getElementById("photo_pro").src=Processor_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_pro" onkeyup="filterFunction_pro()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result1) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result1)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_pro(this)" onclick="change_pro(this)" value="'.$row["Image"].','.$row["Socket"].','.$row["Price"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_pro() {//====change here
                    document.getElementById("dropdown_pro").classList.toggle("show");//===toggle show

                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_pro(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_pro");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_pro(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_pro");//====get dropdown button to change name
                      var total = document.getElementById("processor_price");//====get total value lable to  change total price
                      var part = document.getElementById("processor");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var input, filter, ul, li, a, i;
                                      div = document.getElementById("dropdown_mbd");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                                      for (i = 0; i < a.length; i++) {
                                        var loop = a[i].value.split(",");
                                        if(loop[1]!=Processor_value){
                                          a[i].disabled = "true";
                                        }else{
                                          a[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                    //console.log(res);
                                    Processor_value = res[1];//====change here
                                    filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    document.getElementById("DropBtn_pro").style.background='#5cb85c';
                                    document.getElementById("DropBtn_mbd").disabled="";

                                    document.getElementById("DropBtn_ram").disabled="true";
                                    document.getElementById("DropBtn_gpu").disabled="true";
                                    document.getElementById("DropBtn_cas").disabled="true";
                                    document.getElementById("DropBtn_pow").disabled="";
                                    document.getElementById("DropBtn_stg").disabled="true";
                                    document.getElementById("DropBtn_col").disabled="true";

                                    //====================================================================
                                    document.getElementById("motherboard").value="";
                                    document.getElementById("motherboard_price").value=0;
                                    document.getElementById("DropBtn_mbd").innerHTML="Mother-Board";
                                    document.getElementById("DropBtn_mbd").style.background='#C82333';
                                   // document.getElementById("photo_mbd").src="assets/preview.png";
                  
                                    document.getElementById("graphics").value="";
                                    document.getElementById("graphics_price").value=0;
                                    document.getElementById("DropBtn_gpu").innerHTML="Graphic-Card";
                                    document.getElementById("DropBtn_gpu").style.background='#C82333';
                                   // document.getElementById("photo_gpu").src="assets/preview.png";

                                    document.getElementById("storage").value="";
                                    document.getElementById("storage_price").value=0;
                                    document.getElementById("DropBtn_stg").innerHTML="Storage";
                                    document.getElementById("DropBtn_stg").style.background='#C82333';
                                   // document.getElementById("photo_stg").src="assets/preview.png";

                                    document.getElementById("RAM").value="";
                                    document.getElementById("RAM_price").value=0;
                                    document.getElementById("DropBtn_ram").innerHTML="RAM";
                                    document.getElementById("DropBtn_ram").style.background='#C82333';
                                   // document.getElementById("photo_ram").src="assets/preview.png";

                                    document.getElementById("cooling").value="";
                                    document.getElementById("cooling_price").value=0;
                                    document.getElementById("DropBtn_col").innerHTML="Cooling";
                                    document.getElementById("DropBtn_col").style.background='#C82333';
                                  //  document.getElementById("photo_col").src="assets/preview.png";

                                    document.getElementById("power").value="";
                                    document.getElementById("power_price").value=0;
                                    document.getElementById("DropBtn_pow").innerHTML="Power-Supply";
                                    document.getElementById("DropBtn_pow").style.background='#C82333';
                                  //  document.getElementById("photo_pow").src="assets/preview.png";

                                    document.getElementById("casing").value="";
                                    document.getElementById("casing_price").value=0;
                                    document.getElementById("DropBtn_cas").innerHTML="Casing";
                                    document.getElementById("DropBtn_cas").style.background='#C82333';
                                   // document.getElementById("photo_cas").src="assets/preview.png";

                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Processor_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_pro").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_pro() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_pro");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_pro");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- motherboard -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_mbd()" class="btn btn-danger btn-lg btn-block" id="DropBtn_mbd" style="color:black;"><img id="photo_mbd" src="Images/motherboard.png" alt="" width="80" height="80"><br>Motherboard</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_mbd" onmouseleave="BackToNormal_mbd()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                       /* function BackToNormal_mbd(){
                          document.getElementById("photo_mbd").src=Motherboard_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_mbd" onkeyup="filterFunction_mbd()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result2) > 0) {//====change here
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result2)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_mbd(this)" onclick="change_mbd(this)" value="'.$row["Image"].','.$row["Socket"].','.$row["Price"].','.$row["hard"].','.$row["ram"].','.$row["pci"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_mbd() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").classList.toggle("show");//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_mbd(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_mbd");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_mbd(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_mbd");//====get dropdown button to change name
                      var total = document.getElementById("motherboard_price");//====get total value lable to  change total price
                      var part = document.getElementById("motherboard");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var a1,a2,a3,div1,div2,div3, i;

                                      //div1 = document.getElementById("dropdown_stg");//====dropdown area
                                      div1 = document.getElementById("dropdown_col");//====dropdown area
                                      div2 = document.getElementById("dropdown_ram");//====dropdown area
                                      div3 = document.getElementById("dropdown_gpu");//====dropdown area
 
                                      //a1 = div1.getElementsByTagName("button");//====get buttons in the dropdown area
                                      a1 = div1.getElementsByTagName("button");//====get buttons in the dropdown area
                                      a2 = div2.getElementsByTagName("button");//====get buttons in the dropdown area
                                      a3 = div3.getElementsByTagName("button");//====get buttons in the dropdown area

                                      // for (i = 0; i < a1.length; i++) {
                                      //   var res = a1[i].value.split(",");
                                      //   if(res[1]!=Storage_value){
                                      //     a1[i].disabled = "true";
                                      //   }else{
                                      //     a1[i].disabled = "";
                                      //   }
                                      // }
                                      for (i = 0; i < a1.length; i++) {
                                        var loop = a1[i].value.split(",,");
                                        //console.log(loop[1],Col_value);
                                        if(loop[1].includes(Col_value)){
                                          a1[i].disabled = "";
                                        }else{
                                          a1[i].disabled = "true";
                                        }
                                      }

                                      for (i = 0; i < a2.length; i++) {
                                        var loop = a2[i].value.split(",");
                                        //console.log(loop[1],RAM_value);
                                        if(loop[1]!=RAM_value){
                                          a2[i].disabled = "";
                                        }else{
                                          a2[i].disabled = "true";
                                        }
                                      }

                                      for (i = 0; i < a3.length; i++) {
                                        var loop = a3[i].value.split(",");
                                        //console.log(loop[1],"====",GPU_value);
                                        if(parseInt(loop[1]) <= parseInt(GPU_value)){
                                          a3[i].disabled = "true";
                                        }else{
                                          a3[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                    //console.log(res);
                                    Storage_value = res[3];//====change here
                                    RAM_value = res[4];//====change here
                                    GPU_value = res[5];//====change here
                                    Col_value = res[1];//====change here
                                    filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    document.getElementById("DropBtn_mbd").style.background='#5cb85c';

                                    document.getElementById("DropBtn_ram").disabled="";
                                    document.getElementById("DropBtn_gpu").disabled="";
                                    document.getElementById("DropBtn_cas").disabled="";
                                    //document.getElementById("DropBtn_pow").disabled="";
                                    document.getElementById("DropBtn_stg").disabled="";
                                    document.getElementById("DropBtn_col").disabled="";
                                    
                                    //====================================================================
                                
                                    // document.getElementById("graphics").value="";
                                    document.getElementById("graphics_price").value=0;
                                    document.getElementById("DropBtn_gpu").innerHTML="Graphic-Card";
                                    document.getElementById("DropBtn_gpu").style.background='#C82333';
                                  //  document.getElementById("photo_gpu").src="assets/preview.png";

                                    document.getElementById("storage").value="";
                                    document.getElementById("storage_price").value=0;
                                    document.getElementById("DropBtn_stg").innerHTML="Storage";
                                    document.getElementById("DropBtn_stg").style.background='#C82333';
                                  //  document.getElementById("photo_stg").src="assets/preview.png";

                                    document.getElementById("RAM").value="";
                                    document.getElementById("RAM_price").value=0;
                                    document.getElementById("DropBtn_ram").innerHTML="RAM";
                                    document.getElementById("DropBtn_ram").style.background='#C82333';
                                  //  document.getElementById("photo_ram").src="assets/preview.png";

                                    document.getElementById("cooling").value="";
                                    document.getElementById("cooling_price").value=0;
                                    document.getElementById("DropBtn_col").innerHTML="Cooling";
                                    document.getElementById("DropBtn_col").style.background='#C82333';
                                  //  document.getElementById("photo_col").src="assets/preview.png";

                                    document.getElementById("power").value="";
                                    document.getElementById("power_price").value=0;
                                    document.getElementById("DropBtn_pow").innerHTML="Power-Supply";
                                    document.getElementById("DropBtn_pow").style.background='#C82333';
                                  //  document.getElementById("photo_pow").src="assets/preview.png";

                                    document.getElementById("casing").value="";
                                    document.getElementById("casing_price").value=0;
                                    document.getElementById("DropBtn_cas").innerHTML="Casing";
                                    document.getElementById("DropBtn_cas").style.background='#C82333';
                                  //  document.getElementById("photo_cas").src="assets/preview.png";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Motherboard_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_mbd").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_mbd() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_mbd");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_mbd");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- ram-------- -->  
<div class="row">
    <div class="col-12"><br></div>
    <div class="col-md-2"></div>
    <div class="col-md-4" >
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow" >
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_ram()" class="btn btn-danger btn-lg btn-block" id="DropBtn_ram" style="color:black;"><img id="photo_ram" src="Images/memory.png" alt="" width="80" height="80"> <br>RAM</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_ram" onmouseleave="BackToNormal_ram()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                       /* function BackToNormal_ram(){
                          document.getElementById("photo_ram").src=RAM_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_ram" onkeyup="filterFunction_ram()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result3) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result3)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_ram(this)" onclick="change_ram(this)" value="'.$row["Image"].','.$row["ddr"].','.$row["Price"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_ram() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").classList.toggle("show");//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_ram(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_ram");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_ram(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_ram");//====get dropdown button to change name
                      var total = document.getElementById("RAM_price");//====get total value lable to  change total price
                      var part = document.getElementById("RAM");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var input, filter, ul, li, a, i;
                                      div = document.getElementById("dropdown_mbd");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                                      for (i = 0; i < a.length; i++) {
                                        var res = a[i].value.split(",");
                                        if(res[1]!=Processor_value){
                                          a[i].disabled = "true";
                                        }else{
                                          a[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                   // console.log(res);
                                   // Processor_value = res[1];//====change here
                                    //filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    // document.getElementById("DropBtn_mbd").hidden="";
                                    document.getElementById("DropBtn_ram").style.background='#5cb85c';

                                    //document.getElementById("motherboard").value="";
                                  // document.getElementById("DropBtn_mbd").innerHTML="Mother-Board";
                                  //  document.getElementById("DropBtn_pro").style.background='#5cb85c';
                                    // document.getElementById("photo_mbd").src="assets/preview.png";
                  

                                   //document.getElementById("graphics").value="";
                                    //document.getElementById("DropBtn_gpu").innerHTML="Graphic-Card";
                                    // document.getElementById("photo_gpu").src="assets/preview.png";

                                    //document.getElementById("storage").value="";
                                    //document.getElementById("DropBtn_stg").innerHTML="Storage";
                                    // document.getElementById("photo_stg").src="assets/preview.png";

                                    //document.getElementById("RAM").value="";
                                    //document.getElementById("DropBtn_ram").innerHTML="RAM";
                                    // document.getElementById("photo_ram").src="assets/preview.png";

                                    //document.getElementById("cooling").value="";
                                   //document.getElementById("DropBtn_col").innerHTML="Cooling";
                                    // document.getElementById("photo_col").src="assets/preview.png";

                                   // document.getElementById("power").value="";
                                   // document.getElementById("DropBtn_pow").innerHTML="Power-Supply";
                                    // document.getElementById("photo_pow").src="assets/preview.png";

                                  //  document.getElementById("casing").value="";
                                   // document.getElementById("DropBtn_cas").innerHTML="Casing";
                                    // document.getElementById("photo_cas").src="assets/preview.png";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      RAM_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_ram").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_ram() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_ram");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_ram");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- storage---- -->  
<div class="row">
    <div class="col-12"><br></div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_stg()" class="btn btn-danger btn-lg btn-block" id="DropBtn_stg" style="color:black;"><img id="photo_stg" src="Images/hard-drive.png" alt="" width="80" height="80"><br>Storage </button><!--==== CHANGE HERE =-->
                      <div id="dropdown_stg" onmouseleave="BackToNormal_stg()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                      /*  function BackToNormal_stg(){
                          document.getElementById("photo_stg").src=Storage_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_stg" onkeyup="filterFunction_stg()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result4) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result4)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_stg(this)" onclick="change_stg(this)" value="'.$row["Image"].','.$row["interface"].','.$row["Price"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_stg() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").classList.toggle("show");//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_stg(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_stg");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_stg(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_stg");//====get dropdown button to change name
                      var total = document.getElementById("storage_price");//====get total value lable to  change total price
                      var part = document.getElementById("storage");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var input, filter, ul, li, a, i;
                                      div = document.getElementById("dropdown_mbd");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                                      for (i = 0; i < a.length; i++) {
                                        var res = a[i].value.split(",");
                                        if(res[1]!=Processor_value){
                                          a[i].disabled = "true";
                                        }else{
                                          a[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                    //console.log(res);
                                    //Processor_value = res[1];//====change here
                                    //filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    // document.getElementById("DropBtn_mbd").hidden="";
                                    document.getElementById("DropBtn_stg").style.background='#5cb85c';

                                    // document.getElementById("motherboard").value="";
                                    // document.getElementById("DropBtn_mbd").innerHTML="Mother-Board";
                                    // document.getElementById("DropBtn_pro").style.background='#5cb85c';
                                    // document.getElementById("photo_mbd").src="assets/preview.png";
                  

                                    // document.getElementById("graphics").value="";
                                    // document.getElementById("DropBtn_gpu").innerHTML="Graphic-Card";
                                    // document.getElementById("photo_gpu").src="assets/preview.png";

                                    // document.getElementById("storage").value="";
                                    // document.getElementById("DropBtn_stg").innerHTML="Storage";
                                    // document.getElementById("photo_stg").src="assets/preview.png";

                                    // document.getElementById("RAM").value="";
                                    // document.getElementById("DropBtn_ram").innerHTML="Mother-Board";
                                    // document.getElementById("photo_ram").src="assets/preview.png";

                                    // document.getElementById("cooling").value="";
                                    // document.getElementById("DropBtn_col").innerHTML="Mother-Board";
                                    // document.getElementById("photo_col").src="assets/preview.png";

                                    // document.getElementById("power").value="";
                                    // document.getElementById("DropBtn_pow").innerHTML="Mother-Board";
                                    // document.getElementById("photo_pow").src="assets/preview.png";

                                    // document.getElementById("casing").value="";
                                    // document.getElementById("DropBtn_cas").innerHTML="Mother-Board";
                                    // document.getElementById("photo_cas").src="assets/preview.png";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Storage_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_stg").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_stg() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_stg");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_stg");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- graphics ----->   
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_gpu()" class="btn btn-danger btn-lg btn-block" id="DropBtn_gpu" style="color:black;"><img id="photo_gpu" src="Images/graphic-card.png" alt="" width="80" height="80"><br>Graphic-CARD</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_gpu" onmouseleave="BackToNormal_gpu()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                      /*  function BackToNormal_gpu(){
                          document.getElementById("photo_gpu").src=Graphics_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_gpu" onkeyup="filterFunction_gpu()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result5) > 0) {//====change here
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result5)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_gpu(this)" onclick="change_gpu(this)" value="'.$row["Image"].','.$row["pci"].','.$row["Price"].','.$row["watt"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_gpu() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").classList.toggle("show");//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_gpu(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_gpu");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_gpu(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_gpu");//====get dropdown button to change name
                      var total = document.getElementById("graphics_price");//====get total value lable to  change total price
                      var part = document.getElementById("graphics");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {

                                      var input, filter, ul, li, a, i;

                                      div = document.getElementById("dropdown_pow");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area

                                      for (i = 0; i < a.length; i++) {
                                        var res = a[i].value.split(",");
                                        console.log(res[1],"====",GPU_value);
                                        if(parseInt(res[1]) >= parseInt(GPU_value)){
                                          a[i].disabled = "";
                                          console.log("en");
                                        }else{
                                          a[i].disabled = "true";
                                          console.log("dis");
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                    GPU_value = res[3];//====change here
                                    filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    //document.getElementById("motherboard").value="";
                                    document.getElementById("DropBtn_gpu").style.background='#5cb85c';
                                    //document.getElementById("DropBtn_pow").disabled="";

                                    document.getElementById("power").value="";
                                    document.getElementById("power_price").value=0;
                                    document.getElementById("DropBtn_pow").innerHTML="Power-Supply";
                                    document.getElementById("DropBtn_pow").style.background='#C82333';
                                  //  document.getElementById("photo_pow").src="assets/preview.png";
                                    

                                    // document.getElementById("graphics").value="";
                                    // document.getElementById("storage").value="";
                                    // document.getElementById("RAM").value="";
                                    // document.getElementById("cooling").value="";
                                    // document.getElementById("power").value="";
                                    // document.getElementById("casing").value="";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Graphics_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_gpu").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_gpu() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_gpu");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_gpu");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- cooling---- -->  
<div class="row">
    <div class="col-12"><br></div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_col()" class="btn btn-danger btn-lg btn-block" id="DropBtn_col" style="color:black;"><img id="photo_col" src="Images/fan.png" alt="" width="80" height="80"><br>CPU Cooler</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_col" onmouseleave="BackToNormal_col()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                     /*   function BackToNormal_col(){
                          document.getElementById("photo_col").src=Cooling_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_col" onkeyup="filterFunction_col()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result6) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result6)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_col(this)" onclick="change_col(this)" value="'.$row["Image"].',,'.$row["Socket"].',,'.$row["Price"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_col() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").classList.toggle("show");//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_col(x){
                      //==========================================
                        var res = x.value.split(",,");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_col");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_col(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_col");//====get dropdown button to change name
                      var total = document.getElementById("cooling_price");//====get total value lable to  change total price
                      var part = document.getElementById("cooling");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var input, filter, ul, li, a, i;
                                      div = document.getElementById("dropdown_mbd");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                                      for (i = 0; i < a.length; i++) {
                                        var res = a[i].value.split(",");
                                        if(res[1]!=Processor_value){
                                          a[i].disabled = "true";
                                        }else{
                                          a[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",,");
                                    //console.log(res);
                                    //Processor_value = res[1];//====change here
                                    //filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    // document.getElementById("DropBtn_mbd").hidden="";
                                    document.getElementById("DropBtn_col").style.background='#5cb85c';

                                    // document.getElementById("motherboard").value="";
                                    // document.getElementById("DropBtn_mbd").innerHTML="Mother-Board";
                                    // document.getElementById("DropBtn_pro").style.background='#5cb85c';
                                    // document.getElementById("photo_mbd").src="assets/preview.png";
                  

                                    // document.getElementById("graphics").value="";
                                    // document.getElementById("DropBtn_gpu").innerHTML="Graphic-Card";
                                    // document.getElementById("photo_gpu").src="assets/preview.png";

                                    // document.getElementById("storage").value="";
                                    // document.getElementById("DropBtn_stg").innerHTML="Storage";
                                    // document.getElementById("photo_stg").src="assets/preview.png";

                                    // document.getElementById("RAM").value="";
                                    // document.getElementById("DropBtn_ram").innerHTML="Mother-Board";
                                    // document.getElementById("photo_ram").src="assets/preview.png";

                                    // document.getElementById("cooling").value="";
                                    // document.getElementById("DropBtn_col").innerHTML="Mother-Board";
                                    // document.getElementById("photo_col").src="assets/preview.png";

                                    // document.getElementById("power").value="";
                                    // document.getElementById("DropBtn_pow").innerHTML="Mother-Board";
                                    // document.getElementById("photo_pow").src="assets/preview.png";

                                    // document.getElementById("casing").value="";
                                    // document.getElementById("DropBtn_cas").innerHTML="Mother-Board";
                                    // document.getElementById("photo_cas").src="assets/preview.png";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Cooling_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_col").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_col() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_col");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_col");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- power -------->  
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_pow()" class="btn btn-danger btn-lg btn-block" id="DropBtn_pow" style="color:black;"><img id="photo_pow" src="Images/power-supply.png" alt="" width="80" height="80"> <br>Power Supply</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_pow" onmouseleave="BackToNormal_pow()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                     /*   function BackToNormal_pow(){
                          document.getElementById("photo_pow").src=Power_normal;
                        }*/
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_pow" onkeyup="filterFunction_pow()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result7) > 0) {//====change here
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result7)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_pow(this)" onclick="change_pow(this)" value="'.$row["Image"].','.$row["watt"].','.$row["Price"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_pow() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").classList.toggle("show");//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").className = "AV-a-dropdown-content";//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_pow(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_pow");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_pow(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_pow");//====get dropdown button to change name
                      var total = document.getElementById("power_price");//====get total value lable to  change total price
                      var part = document.getElementById("power");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var input, filter, ul, li, a, i;
                                      div = document.getElementById("dropdown_pow");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                                      for (i = 0; i < a.length; i++) {
                                        var res = a[i].value.split(",");
                                        if(res[1]!=Processor_value){
                                          a[i].disabled = "true";
                                        }else{
                                          a[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                    //console.log(res);
                                    //Processor_value = res[1];//====change here
                                    //filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    //document.getElementById("motherboard").value="";
                                    document.getElementById("DropBtn_pow").style.background='#5cb85c';
                                    
                                    // document.getElementById("storage").value="";
                                    // document.getElementById("RAM").value="";
                                    // document.getElementById("cooling").value="";
                                    // document.getElementById("power").value="";
                                    // document.getElementById("casing").value="";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Power_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_pow").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_pow() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_pow");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_pow");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>
<!-- casing----- -->  
<div class="row">
    <div class="col-12"><br></div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <!-- ===================================================================== DROP DOWN BUTTON =========================================================================== -->
                  <div class="shadow">
                    <!--==========================toggle hide myAV-a-dropdown_mb ============================================================-->
                    <button onclick="show_cas()" class="btn btn-danger btn-lg btn-block" id="DropBtn_cas" style="color:black;"><img id="photo_cas" src="Images/cpu (1).png" alt="" width="80" height="80"> <br>Casing</button><!--==== CHANGE HERE =-->
                      <div id="dropdown_cas" onmouseleave="BackToNormal_cas()" class="AV-a-dropdown-content"><!--==== CHANGE HERE =-->
                      <script>
                     /*   function BackToNormal_cas(){
                          document.getElementById("photo_cas").src=Casing_normal;
                        } */
                      </script>
                        <!--========================== SEARCH BAR ============================================================-->
                        <input type="text" class="form-control mt-2 mb-2" placeholder="Search.." id="search_cas" onkeyup="filterFunction_cas()"><!--==== CHANGE HERE =-->
                          <?php
                            if (mysqli_num_rows($result8) > 0) {
                              // output data of each row
                              while($row = mysqli_fetch_assoc($result8)) {
                                echo '<button class="btn btn-light btn-block" id="'.$row["ID"].'" onmouseover="hover_cas(this)" onclick="change_cas(this)" value="'.$row["Image"].','.$row["size"].','.$row["Price"].'" href="#about">'.$row["Name"].'Price'.$row["Price"].'<img src="'.$row["Image"].'" alt=""></button>';
                                //echo '<input type="text" id="socket'.$row["ID"].'" value="'.$row["Socket"].'" disabled><br>';    "Image":"'.$row["Image"].'", "Socket":"'.$row["Socket"].'"
                              }
                            } else {
                              echo "0 results";
                            }
                          
                          ?>
                        <!-- <button id="" onmouseover="product(this)" onclick="change(this)" value="photo/laptop/3.png" href="#tools"   >Tools   <img src="photo/laptop/3.png" alt=""></button> -->
                      </div>
                  </div>
    <!-- ====================================================================== JS SCRIPT ========================================================================== -->            
                  <script>
                  //==========================toggle hide myAV-a-dropdown_mb ============================================================
                  function show_cas() {//====change here
                    document.getElementById("dropdown_pro").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_mbd").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_ram").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_stg").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_gpu").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_pow").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_col").className = "AV-a-dropdown-content";//===toggle show
                    document.getElementById("dropdown_cas").classList.toggle("show");//===toggle show
                  }
                  //======================== CHANGE IMAGE WHEN HOVER ============================================
                  //=============================================================================================
                  function hover_cas(x){
                      //==========================================
                        var res = x.value.split(",");
                        //console.log(res);
                      //==========================================
                      var photo = document.getElementById("photo_cas");//====get image area
                      photo.src = res[0];
                  }
                  //======================== CHANGE IMAGE WHEN CLICKED ==========================================
                  //=============================================================================================
                  function change_cas(x){//====chage here
                      var ButtonLable = document.getElementById("DropBtn_cas");//====get dropdown button to change name
                      var total = document.getElementById("casing_price");//====get total value lable to  change total price
                      var part = document.getElementById("casing");//====get part to change name
                                  //============================================
                                  function filterFunction_onetime() {
                                      var input, filter, ul, li, a, i;
                                      div = document.getElementById("dropdown_mbd");//====dropdown area
                                      a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                                      for (i = 0; i < a.length; i++) {
                                        var res = a[i].value.split(",");
                                        if(res[1]!=Processor_value){
                                          a[i].disabled = "true";
                                        }else{
                                          a[i].disabled = "";
                                        }
                                      }
                                    }

                                  //==========================================
                                    var res = x.value.split(",");
                                    //console.log(res);
                                    //Processor_value = res[1];//====change here
                                    //filterFunction_onetime();
                                  //=============== VALUE RESET ==============
                                    // document.getElementById("DropBtn_mbd").hidden="";
                                    document.getElementById("DropBtn_cas").style.background='#5cb85c';

                                    // document.getElementById("motherboard").value="";
                                    // document.getElementById("DropBtn_mbd").innerHTML="Mother-Board";
                                    // document.getElementById("DropBtn_pro").style.background='#5cb85c';
                                    // document.getElementById("photo_mbd").src="assets/preview.png";
                  

                                    // document.getElementById("graphics").value="";
                                    // document.getElementById("DropBtn_gpu").innerHTML="Graphic-Card";
                                    // document.getElementById("photo_gpu").src="assets/preview.png";

                                    // document.getElementById("storage").value="";
                                    // document.getElementById("DropBtn_stg").innerHTML="Storage";
                                    // document.getElementById("photo_stg").src="assets/preview.png";

                                    // document.getElementById("RAM").value="";
                                    // document.getElementById("DropBtn_ram").innerHTML="Mother-Board";
                                    // document.getElementById("photo_ram").src="assets/preview.png";

                                    // document.getElementById("cooling").value="";
                                    // document.getElementById("DropBtn_col").innerHTML="Mother-Board";
                                    // document.getElementById("photo_col").src="assets/preview.png";

                                    // document.getElementById("power").value="";
                                    // document.getElementById("DropBtn_pow").innerHTML="Mother-Board";
                                    // document.getElementById("photo_pow").src="assets/preview.png";

                                    // document.getElementById("casing").value="";
                                    // document.getElementById("DropBtn_cas").innerHTML="Mother-Board";
                                    // document.getElementById("photo_cas").src="assets/preview.png";
                                  //==========================================

                      part.value = x.innerText;
                      ButtonLable.innerText = x.innerText;
                      Casing_normal = res[0];
                      total.value = parseInt(res[2]);
                      setBill();
                      document.getElementById("dropdown_cas").classList.toggle("show");//==== hide the dropdown area
                  }
                  //<!--========================== SEARCH BAR ============================================================-->
                  //=========================================================================================================
                  function filterFunction_cas() {
                    var input, filter, ul, li, a, i;
                    input = document.getElementById("search_cas");//====search button ID
                    filter = input.value.toUpperCase();
                    div = document.getElementById("dropdown_cas");//====dropdown area
                    a = div.getElementsByTagName("button");//====get buttons in the dropdown area
                    for (i = 0; i < a.length; i++) {
                      txtValue = a[i].textContent || a[i].innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                      } else {
                        a[i].style.display = "none";
                      }
                    }
                  }
                  </script>
    <!-- ================================================================================================================================================ -->    
    </div>
    <div class="col-1"></div>
    <div class="col-md-4 d-flex justify-content-center">
        <!--==== CHANGE HERE =-->
    </div>
    <div class="col-md-1"></div>
    <div class="col-12"><br></div>
</div>


        
  <?php //include 'preset/footer.php';?>
  <div class="row">
  <div class="col-12 m-0 p-0">
      
      <!-- Button trigger modal -->
      <button type="button" id="BuyItem" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter" style="position: fixed;bottom: 0;z-index:3;height:40px;border-radius: 60px 60px 0px 0px;">
        Rs 0.00
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="cart.php" id="form"  method="post">
                <label>Processor   :</label>
                <input type="text" class="form-control" id="processor" name="processor">      <input type="number" id="processor_price" value=0 hidden disabled><br>
                <label>MotherBoard :</label>
                <input type="text" class="form-control" id="motherboard" name="motherboard">  <input type="number" id="motherboard_price" value=0 hidden disabled><br>
                <label>Graphics    :</label>
                <input type="text" class="form-control" id="graphics" name="graphics">        <input type="number" id="graphics_price" value=0 hidden disabled><br>
                <label>HardDisk    :</label>
                <input type="text" class="form-control" id="storage" name="storage">          <input type="number" id="storage_price" value=0 hidden disabled><br>
                <label>RAM         :</label>
                <input type="text" class="form-control" id="RAM" name="RAM" >                 <input type="number" id="RAM_price" value=0 hidden disabled><br>
                <label>Cooling     :</label>
                <input type="text" class="form-control" id="cooling" name="cooling">          <input type="number" id="cooling_price" value=0 hidden disabled><br>
                <label>Power       :</label>
                <input type="text" class="form-control" id="power" name="power">              <input type="number" id="power_price" value=0 hidden disabled><br>
                <label>Casing      :</label>
                <input type="text" class="form-control" id="casing" name="casing">            <input type="number" id="casing_price" value=0 hidden disabled><br>
                <label>Total     :Rs</label><label id="total">0</label><label>.00/=</label><br>
                <input type="text" name="totalSub"                 id="totalSub" hidden><br>
                <input type="text" name="CustomPC" value="yes"                 hidden><br>
                
                <script>
                function formSubmit() {
                  
                  submit1 = document.getElementById("processor");
                  submit2 = document.getElementById("motherboard");
                  submit3 = document.getElementById("graphics");
                  submit4 = document.getElementById("storage");
                  submit5 = document.getElementById("RAM");
                  submit6 = document.getElementById("cooling");
                  submit7 = document.getElementById("power");
                  submit8 = document.getElementById("casing");

                  if(submit1.value == ""){submit1.placeholder="plz select a processor";}
                  if(submit2.value == ""){submit2.placeholder="plz select a motherboard";}
                  if(submit3.value == ""){submit3.placeholder="plz select a graphics";}
                  if(submit4.value == ""){submit4.placeholder="plz select a storage";}
                  if(submit5.value == ""){submit5.placeholder="plz select a RAM";}
                  if(submit6.value == ""){submit6.placeholder="plz select a cooling";}
                  if(submit7.value == ""){submit7.placeholder="plz select a power";}
                  if(submit8.value == ""){submit8.placeholder="plz select a casing";}

                  if(submit1.value==""||submit2.value==""||submit3.value==""||submit4.value==""||submit5.value==""||submit6.value==""||submit7.value==""||submit8.value==""){
                    return null;
                  }
                  else{
                    document.getElementById("totalSub").value = document.getElementById("total").innerHTML;
                    var total = document.getElementById("totalSub").value ;
                    document.getElementById("total").innerHTML="<?php 
$total='"+total+"'; echo $total;?>";

                    //document.getElementById("form").submit();
                    customPC();
                  }
                }
//====================================================================================
                    function customPC() {

                      const myForm2 = document.getElementById('form');

                      const formData = new FormData(myForm2);
                      
                        fetch('cart.php', {
                            method:"POST",
                            body: formData
                        }).then(function (response) {
                            return response.text();
                        })
                        .then(function (data) {
                          if(data=="login"){
                            window.location.replace("login-user.php");
                          }
                          else if(data=="go"){
                            window.location.replace("cart.php");
                          }
                          else{
                            alert(data);
                          }

                        })
                    }
                </script>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="button" onclick="formSubmit()" name="button" value="Submit" class="btn btn-primary">
              </form> 
            </div>
          </div>
        </div>
      </div>
      <script>
          


      </script>
      <!-- ---------------------------------- -->
</div>
      <div class="col-12" style="background-color: black;"><br></div>
      <script>
        //==========set diable at straing===================
        document.getElementById("DropBtn_pro").disabled="";
        document.getElementById("DropBtn_mbd").disabled="true";
        document.getElementById("DropBtn_stg").disabled="true";
        document.getElementById("DropBtn_pow").disabled="true";

        document.getElementById("DropBtn_ram").disabled="true";
        document.getElementById("DropBtn_gpu").disabled="true";
        document.getElementById("DropBtn_col").disabled="true";
        document.getElementById("DropBtn_cas").disabled="true";
        //==================================================
        
        //======FOR FILTERING DONE========================
        var Processor_value;
        var MotherBoard_value;
        var Storage_value;
        var RAM_value;
        var GPU_value;
        var Col_value;
        //==================================================
        var Processor_normal    ="assets/preview.png";
        var Motherboard_normal  ="assets/preview.png";
        var Graphics_normal     ="assets/preview.png";
        var Storage_normal      ="assets/preview.png";

        var RAM_normal          ="assets/preview.png";
        var Cooling_normal      ="assets/preview.png";
        var Power_normal        ="assets/preview.png";
        var Casing_normal       ="assets/preview.png";
        //document.getElementById("DropBtn_mbd").hidden="true";

        function setBill(){
            var val1 = document.getElementById("processor_price").value;
            var val2 = document.getElementById("motherboard_price").value;
            var val3 = document.getElementById("graphics_price").value;
            var val4 = document.getElementById("storage_price").value;
            var val5 = document.getElementById("RAM_price").value;
            var val6 = document.getElementById("cooling_price").value;
            var val7 = document.getElementById("power_price").value;
            var val8 = document.getElementById("casing_price").value;

            var temp = parseInt(val1)+parseInt(val2)+parseInt(val3)+parseInt(val4)+parseInt(val5)+parseInt(val6)+parseInt(val7)+parseInt(val8);

            document.getElementById("total").innerHTML = temp;
            document.getElementById("BuyItem").innerHTML = "Rs "+temp+".00";
            document.getElementById("totalSub").value = temp;
        }
      </script>
  </div>
</div>
<?php include('Footer.php') ?>
</body>
</html>

