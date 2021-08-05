<?php
    session_start();
    $username = "";
    $zone = "";
    $issue = array();

    $dbase = mysqli_connect('localhost', 'root', '', 'restaurant');

    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($dbase, $_POST['username']);
        $zone = mysqli_real_escape_string($dbase, $_POST['zone']);
        $pword = mysqli_real_escape_string($dbase, $_POST['pword']);
        $psword = mysqli_real_escape_string($dbase, $_POST['psword']);

        if(empty($username)){
            array_push($issue, "Input Name");
        }
        if(empty($pword)){
            array_push($issue, "Password is Required");
        }
        if($pword != $psword){
            array_push($issue, "Password Mismatch!");
        }    

    if(count($issue) == 0){
        /*$pword = md5($pword);*/
        $encrypt = "INSERT INTO waiter(name, zone, user_pass)
                    VALUES ('$username', '$zone', '$pword')";
        mysqli_query($dbase, $encrypt);
        $message = "Registration Successful";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
        $message = "Registration Failed!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    header("refresh:3; url = register.php");
}
        
        if(isset($_POST['login'])){
            $Uname = mysqli_real_escape_string($dbase, $_POST['Uname']);
            $Pass = mysqli_real_escape_string($dbase, $_POST['Pass']);

            if(empty($Uname)){
                array_push($issue, "Name Required");
            }
            if(empty($Pass)){
                array_push($issue, "Password Required");
            }

        if(count($issue) == 0){
            /*$Pass = md5($Pass);*/
            $query = "SELECT * FROM waiter WHERE name = '$Uname' AND user_pass = '$Pass'";
            $result = mysqli_query($dbase, $query);
            if (mysqli_num_rows($result) == 1){
                $_SESSION['Uname'] = $Uname;
                header('location: Home.php');
            }else{
                array_push($issue, "Wrong Credentials");
        }
    } 
}

?>