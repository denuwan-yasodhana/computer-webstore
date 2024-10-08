<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chatbot</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    
  
    .box{
        width: 400px;
        margin-right: 200px;
    }
  </style>
</head>
<body>


  <!-- Trigger the modal with a button -->
<button style="padding-right:20px" type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal"><img src="comments.png" style="height:25px"></button>

  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog box">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body set">
          <?php require "bot.php" ?>
        </div>
        
    </div>
      
</div>
</div>
  


</body>
</html>