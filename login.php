
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kanit&family=Patua+One&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Headder-->
    
<img align="right" class"pic" src="next.png" style="margin-top:-2.5%;">
    <b>
        <h1 align="center">Visudh Ajivam</h1>
    </b> </br> </br>
    <p align="center"><b>Enter your user ID and password details</b></p>
    </br> </br>
    
    <form align="center" class="form" action="<?php $_SERVER['PHP_SELF'];?>" style="width:">

        <b><label>User ID:</label></b>
        <input class="name" type="text" name="user_name2" placeholder="example@gmail.com" required>
        <br>
        <br>
        <b><label class="lable">Password:</label></b>
        <input class="pass" type="password" name="password2" placeholder="Required" required>
</br>
</br>
        <input type="submit" value="Next">


    </form>

    
    </br> </br>
    <a href="create.php" align="center">
        <p class="forgot_pass">Forgot Password</p>
    </a>
    <a href="create.php" align="center">
        <p class="forgot_pass">Create an Account</p>
    </a>
</body>
<?php
#connecting to database
$conn = mysqli_connect( "localhost", "root", "", "Database" ) or die( "conn lost" );
$sql2 = "SELECT * FROM table2";
$result = mysqli_query( $conn, $sql2 ) or die( "db lost" );
error_reporting(0);
$name1 = $_GET['user_name2'];
$pass = $_GET['password2'];
while ( $table = mysqli_fetch_assoc( $result ) )  {
    if ( $name1 == $table['user_name'] && $pass == $table['password'] ) {
        
   header("Location:admin.php");
    } 
    else {
  
    }
}

?>  
</html>