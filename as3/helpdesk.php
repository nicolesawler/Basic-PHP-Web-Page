<?php include 'includes/header.php';?>

<h1>Welcome, <?php echo $_SESSION["title"] . " " . $_SESSION["fname"] . " " . $_SESSION["lname"] ?></h1>
<h2>Your role is <?php echo $_SESSION["role"] ?></h2>

<br><br>
<a href="report.php">Report a Problem</a>
<br><br>
<?php
switch ($_SESSION["role"]) {
    case "Admin":
        echo "<a href=resources.php?type=newaccount>Create an Account</a>";
        break;
    case "Manager":
        echo "<a href=resources.php?type=changepassword>Change Password</a>";
        break;
    case "CEO":
        echo "<a href=resources.php?type=requestassistance>Request Password</a>";
        break;
}
?>

<?php include 'includes/footer.php';?>