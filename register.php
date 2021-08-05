<?php include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="register.css" rel="stylesheet">
    </head>
    <body>    
        <div>
        <?php if(isset($_SESSION['success'])): ?>
                <div>
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
        </div>
        <div class="header">
            <h2>Sign Up</h2>
        </div>
            <div>    
                <form method="POST" action="register.php"> 
                    <?php include('issue.php');?>
                    <div class="inputs">
                        <label><b>User Name</b></label>    
                        <input type="text" name="username" value="<?php echo $username; ?>">   
                        <label><b>Zone</b></label>    
                        <input type="text" name="zone" value="<?php echo $zone; ?>">
                        <label><b>Enter Password</b></label>    
                        <input type="password" name="pword"> 
                        <label><b>Confirm Password</b></label>    
                        <input type="password" name="psword">
                        <br>
                    </div>
                    <div id="btn">
                        <button type="submit" name="register" class="btn">Register</button> 
                    </div> 
                    <p id="sign">Signed up already? Proceed to <a href="index.php"><b>Login</b></a></p>
                </form>
            </div>
        </div>
    </form>
    </body>
</html>
