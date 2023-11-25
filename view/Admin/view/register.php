<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/register.css">
    <?php 
        if(!empty($_SESSION["err"])){
            ?><style>.err{display: block;}</style><?php
        }
        if(!empty($_SESSION["sccs"])){
            ?><style>.sccs{display: block;}</style><?php
        }else{
            
        }
        
    ?>
</head>
<body>
    <div class="container">
            <h1>CREATE ACCOUNT</h1>
            <div class="link">
            <a href="login.php">Login</a>
            <p>|</p>
            <a href="register.php">Register</a>
        </div>
        <form action="../index.php" method="post" class="form">
            <input type="text" name="username" placeholder="Username">
            
            <input type="password" name="password" placeholder="Password">
            
            <input type="password" name="cpassword" placeholder="Confirm Password">
            
            <input type="email" name="email" placeholder="Email"><br>
            <div class="msg-container">
            <p class="err email-err"><?php if(isset($_SESSION["err"])){echo $_SESSION["err"]; unset($_SESSION['err']);}?></p>
            <p class="sccs scs"><?php if(isset($_SESSION["sccs"])){echo $_SESSION["sccs"]; unset($_SESSION['sccs']);}?></p>
            </div>
            <input type="submit" name="sub" value="Register">
                   
        </form>
        
    </div>
    <footer class="contai">
        <div class="foot">
            <div class="smedia">
                <a href=""><i class="fa-brands fa-facebook-f fa-xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-youtube fa-xl" style="color: #ffffff;"></i></a>
                
            </div>
            <span>Copyright © HRms 2023. All rights rakenroll.</span>
        </div>
    </footer>
</body>
</html>

