<?php include 'includes/header.php';?>
<?php 
$role = $_GET['type'];
?>
<h1><?php echo "Requesting support for: " . $_SESSION["fname"] . " " . $_SESSION["lname"] ?></h1>
<h2>Your role is <?php echo $_SESSION["role"] ?>
<?php
switch ($role) {
    case "newaccount":?>

<br><br><h1>Create a New Account</h1>
        <form action="account.php" method="post" class="form-signin">
                <label>New Account Name:</label>
                <input type="text" class="form-control" name="accountname">
                <input type="submit" class="btn btn-success" name="form1" value="Submit">
        </form>

    <?php
        break;
    case "changepassword":
        ?>

        <br><br><h1>Change Password</h1>
        <form action="account.php" method="post" class="form-signin">
                <label>Get Password Email:</label>
                <p>Put in password hint to send reset email</p>
                <input type="text" class="form-control" name="emailsend">
                <input type="submit" class="btn btn-success" name="form2" value="Submit"><br>
        <small>Hint: It must be '3363' to send an email</small>
        </form>
        
            <?php
        break;
    case "requestassistance":
        ?>

        <br><br><h1>Assistance</h1>
        Please call 1-902-555-1234 for immediate assistance.
        
            <?php
        break;
}
?>
<?php include 'includes/footer.php';?>