<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

@import url('https://fonts.googleapis.com/css?family=Comfortaa&display=swap');

html,body{

    background: #ffff;
    background-image: url("img/img7.jpg");
    background-attachment: fixed;
    background-position: center; 
    font-family: 'Comfortaa', sans-serif;
}

.container{
    opacity:100%;
   
}

form{
    margin-top: 50px;
   
}

.container .form form .button{
    background: #050e96;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
    border-radius: 20px;
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
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3 form login-form">
                <form action="login-user.php" method="POST" autocomplete="" class="needs-validation" novalidate>
                    <h2 class="text-center set" >Unique X</h2>
                    <p class="text-center"><b>Login with your email and password</b></p>
                   
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>     
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email Address" required>    
                        </div>
                        <div class="invalid-feedback" id="test1"></div>
                            
                    </div>

                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                        
                        </div>
                        
                    </div>
                    <div class="invalid-feedback">Password cannot be empty</div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Create Account</a></div>
                </form>
                <script>
                    function password_show_hide() {
                    var x = document.getElementById("password");
                    var show_eye = document.getElementById("show_eye");
                     var hide_eye = document.getElementById("hide_eye");
                    hide_eye.classList.remove("d-none");
                        if (x.type === "password") {
                            x.type = "text";
                            show_eye.style.display = "none";
                            hide_eye.style.display = "block";
                        } else {
                            x.type = "password";
                            show_eye.style.display = "block";
                            hide_eye.style.display = "none";
                        }
                    }

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
                    }
                    form.classList.add( 'was-validated' );
                }, false );
            } );
                    
                </script>
            </div>
        </div>
    </div>   
</body>
</html>