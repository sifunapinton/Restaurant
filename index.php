<?php include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="login.css" rel="stylesheet">
        <script src="login.js"></script>
    </head>
    <body>    
        <div id="logbg">
            <div class="header"><h1>WELCOME</h1></div>
            <div class="login">    
                <form id="login" method="post" action="index.php"> 
                    <?php include('issue.php'); ?>   
                    <label><b>User Name</b></label><br> <br>  
                    <input type="text" name="Uname" id="Uname" placeholder="Username">    
                    <br><br>
                    <label><b>Password</b></label> <br> <br>
                    <input type="Password" name="Pass" id="Pass" placeholder="Password">    
                    <br><br>
                    <div id="logn">
                        <button type="submit" name="login" id="log" >Login</button>
                        <!--<input type="button" id="log" value="Login" onclick="myLog()">-->
                    </div>
 
                    <div id="lognn">
                        <input type="button" id="fpass" value="Forgot Password?">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" id="reg" value="Register" onclick="myReg()">
                    </div>   
                    <br>       
                </form>
            </div>
        </div>
    </body>
</html>
