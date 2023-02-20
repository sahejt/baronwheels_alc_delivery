<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
  }
?>

<?php 
include("header.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>BarOnWheels - Account</title>
</head>
<body>
<br><br><br><br><br>
</div>

<div class="username" align="center">
<ion-icon name="person-circle-outline"></ion-icon>
<?php echo "<h1>Hello, " . $_SESSION['username'] .  "!</h1>"; ?>

<div class="buttons-user">
<a href="user.php"><button class="btn-settings-selected">Account</button></a>
<a href="#"><button class="btn-settings">Orders</button></a>
<a href="#"><button class="btn-settings">Settings</button></a>
<a href="logout.php"><button class="btn-settings-logout">Log Out</button></a>
</div>
  
</body>
</html>
 

