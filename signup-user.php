<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<!--=====================================================================================-->
<style>
@import url('https://fonts.googleapis.com/css?family=Source Code Pro&display=swap');
html,body{

    background: #ffff;
    background-image: url("img1.jpeg");
    background-repeat: no-repeat;
    background-size: 100%;
  
    background-attachment: fixed;
    background-position: center; 

    font-family: 'Source Code Pro', sans-serif;
}
form{
   
    margin-bottom: 50px;
}
.container{
    margin-top: 15%;
    padding-bottom: 100px;
   
}

.container .form{
    border-style:none;
    border-width: 1px;
    border-color: black;
    padding-top: 5px;
    background: #fff;
   
    opacity: 100%;
    
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    
}

.container .form form .button{
    background: #050e96;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.1s ease;
}
.container .form form .button:hover{
    background:#1a232e;
}
.set{
    color:#00FF00;
    background: black;
    border-radius: 10px;
}



</style>
<!--=========================================================================================================-->

</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-2 form">
                <form class="needs-validation" novalidate action="signup-user.php" method="POST" autocomplete="" enctype="multipart/form-data">
                    <br>
                    
                    <img src="img/computer.png" height="100px" width="auto" class="d-block mx-auto"  >
                    
                    <br>
                    <h2 class="text-center set">Welcome to Unique X Computers</h2>
                    <p class="text-center"><b>Create Account for more features</b></p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                    <!--signup form-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="uname" placeholder="User Name" required>
                        <div class="invalid-feedback">Username cannot be empty</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                        <div class="invalid-feedback">Name cannot be empty</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" name="email" placeholder="Email Address" required>
                        <div class="invalid-feedback" id="test1"></div>    
                    </div>
                    <div class="form-group form-row">
                    <div class="col-6">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Password" minlength="6" maxlength="16" required>
                        <div class="invalid-feedback" id="test2"></div>
                    </div>
                    <div class="col-6">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                        <div class="invalid-feedback">Confirm password cannot be empty</div>
                    </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="address" placeholder="Address" required>
                        <div class="invalid-feedback">Address cannot be empty</div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="country" placeholder="Country" required>
                        <div class="invalid-feedback">Country cannot be empty</div>
                    </div>
                    <div class="form-row ">
                    <div class="form-group col-md-6">
                        <input class="form-control" type="number" name="tphone" placeholder="Phone Number" required >
                        <div class="invalid-feedback">Phone number cannot be empty</div>
                    </div> 
                    <div class="form-group col-md-6">
                        <input class="form-control" type="number" name="pcode" placeholder="Postal Code" required>
                        <div class="invalid-feedback">Postal code cannot be empty</div>
                    </div>   
                    </div><br><br>
                    <div class="form-row">

                                <div class="form-group col-md-4">
                                    <img id="preview" src="img/user.png" alt="Your image" class="rounded-circle d-block mx-auto" align-item="center" height="150px" width="150px">
                                </div>

                                <div class="form-group col-md-8">
                                    <label>Add your Image(Not required)</label>
                                    <input type="file" class="form-control-file btn btn-light" name="img" onchange="readURL(this);"><br><hr>
                                </div>
                                
                                <script>
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                document.getElementById("preview").src = e.target.result;
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                        </div><br><br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Create Account">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    <script>
                    
            var forms = document.querySelectorAll('.needs-validation');
            

        
            Array.prototype.slice.call( forms ).forEach( function( form )
            {
                form.addEventListener( 'submit', function ( event )
                {
                    if ( !form.checkValidity( ))
                    {
                        event.preventDefault( )
                        event.stopPropagation( );
                        document.getElementById("test1").innerHTML=email.validationMessage;
                        document.getElementById("test2").innerHTML=password.validationMessage;
                        
                    }

                    form.classList.add( 'was-validated' );
              }, false );
            } );

    </script>
    
    
</body>
</html>