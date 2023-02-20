<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarOnWheels - User Center</title>
    <link rel="stylesheet" href="preferences.css">

</head>
<body>

<br><br><br><br>




<div class="pref-selector">
<div class="username">
<?php echo "<h1>Welcome, " . $_SESSION['username'] .  "!</h1>"; ?>

<div class="btn">
<a href="logout.php"><button>Log Out</button></a>
<div>
</div>
    

                         <h2> Preferences </h2>
                            <ul>
                              <li><p><a href="preferences.html"><sp> Account </sp></a></p></li>
                              <li><p><a href="preferences-display.html">Display </a></p></li>
                              <li><p><a href="#">2FA Security </a></p></li>
                              <li><p><a href="#">Developer Settings </a></p></li>
                            </ul>
                            </div>

    
<div class="settings">

<div class="setting">
    <h2> Change Password </h2><br>
    <form>
    <input type="text" placeholder="Old Password">
    <input type="text" placeholder="New Password">
    <button class="set-button" type="submit"> Change Password </button>
</form>

</div>

<div class="setting1">
    <h2> Change E-mail </h2><br>
    <form>
    <input type="email" placeholder="New E-Mail Address">
    <button class="set-button" type="submit"> Change E-Mail Address </button>
</form>

</div>

<div class="setting1">
    <h2> Change Username </h2><br>
    <form>
    <input type="number" placeholder="New Username">
    <button class="set-button" type="submit"> Change Username</button>
</form></div>

<div class="setting1">
    <h2> Change Phone Number </h2><br>
    <form>
    <input type="number" placeholder="New Phone Number">
    <button class="set-button" type="submit"> Change Phone Number </button>
</form>

</div>

</div>
</div>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

</body>
</html>