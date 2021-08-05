<?php
     	
    $dbase = mysqli_connect('localhost', 'root', '', 'restaurant');

    if($dbase === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if(isset($_POST['ok'])) {
        $amount = $_POST['amount'];
        $amt = mysqli_query($dbase,"UPDATE product SET amount='$amount' WHERE product_id='p001'");
        
        $qnty = "UPDATE product SET new_quantity = (SELECT quantity-amount FROM product)";
        mysqli_query($dbase, $qnty); 
        if($amt){
            mysqli_close($dbase); 
            echo "<p style='font-size:50px; color:green;'>Order submitted successfully</p>";
            //echo '<script>alert("Order submitted successfully")</script>';
            header("refresh: 1; url = Home.php"); 
            exit;
        }else{
            echo mysqli_error();
        }  
    }

?>