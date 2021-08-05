<!DOCTYPE <html>
    <body>
    <?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'restaurant');
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

   $sql = "SELECT zone FROM waiter where emp_no=60";
   mysqli_select_db($conn,"restaurant");
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    echo $row["zone"]; 
   }
   
   mysqli_close($conn);
?>
</body>
</html>
