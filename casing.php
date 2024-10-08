<?php 

//index.php

include('itemdbcon.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

   <!-- Required meta tags -->
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
        
        #price_show{
            background-color:white;
            font-weight:bold;
            color:gray;
        }

        .list-group{
            border-top: none;
        }
        .col-md-2{

            text-align:left;
        }

        .list-group {
            background-color:white;
        }

        .container-fluid h3{
            font-family:sans-serif;
            font-size:18px;
            color:Black;
        }
        
       

    </style>
</head>

<body>

<div class="navi">
    
        <?php include 'Navigation.php';?>
        <div class="row">
                <div class="col-12 laptop">

                </div>
        </div>
        <br>
    </div>


<!-- Item category and selection buttons -->
    <div class="row">
    <div class="col-md-2">
    
            <div style="text-align:center; font-weight:bold;">
                <h3 >
                    MONITORS
                </h3>
            </div>
    </div>

    <div class="col-md-10">
    
            <button type="button" class="btn btn-outline-primary" class="common_selector all_items" name="all_items">All</button>
            <button type="button" class="btn btn-outline-warning" onclick="newarr()" class="common_selector newarr" name="newarr">New Arrivals</button>
            <button type="button" class="btn btn-outline-dark">Special Offers %</button>
    </div>
</div>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
         <br />
         <h2 style="text-align:center;" id ="title"></h2>
         <br />
            <div class="col-md-2">  
                
            
    <!--<div class="list-group">
     <h3>Price</h3>
     <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="650000" />
                    <p id="price_show">10000 lkr - 650000 lkr</p>
                    <div id="price_range"></div>
                </div>    
                <br>

    -->
                
    <div class="list-group">
     <h3>Availability</h3>
                    
            <div class="borderless">
               <div class="list-group-item checkbox ">
                    <label><input type="checkbox" class="common_selector status" name="status" value="In stock"> In stock</label>
               </div>
               <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector status" name="status" value="Out of Stock"> Out stock</label>
               </div>
               <?php
                               
               
            ?></div>
                </div>
                <br>
                              
               
     <div class="list-group">
    
     <h3>Brand</h3>
                    
     <?php

                    $query = "SELECT DISTINCT(Brand) FROM products WHERE Category ='casing'  ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox list-group-item-action">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['Brand']; ?>"  > <?php echo $row['Brand']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                    <br>
                    
                </div>
            <div class="col-md-10">
             <br/>
                <div class="row filter_data">

                </div>
            </div>
            
        </div>
        <br>

    </div>
    <div class="navi">
    
        <?php include 'Footer.php';?>
        <div class="row">
                <div class="col-12 laptop">

                </div>
        </div>
        <br>
    </div>

    
<style>
#loading
{
 text-align:center; 
 background: url('loader_2.gif') no-repeat center; 
 height: 150px;
}
</style>

<script>


$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        var status = get_filter('status');
        var processor = get_filter('processor');
        var all_items = get_filter('all_items');
        var newarr = get_filter('newarr');
        var add_to_cart = get_filter('add_to_cart');
        $.ajax({
            url:"casing_db.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, status:status, ram:ram, storage:storage , processor:processor, all_items:all_items, newarr:newarr,add_to_cart:add_to_cart},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:10000,
        max:650000,
        values:[10000, 650000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] +' lkr'+ ' - ' + ui.values[1]+' lkr');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>



</body>

</html>