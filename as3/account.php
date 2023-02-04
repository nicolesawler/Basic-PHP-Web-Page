<?php 
include 'includes/header.php';

if(isset($_POST["form1"])){
    $a = $_POST['accountname'];
    echo "<h2>Created Successfully</h2>Your new account was created named <b>".$a."</b>.";
}
else 
{
    $e = $_POST['emailsend'];

    if($e === "3363"){
        echo "<h2>Thank you</h2>That is correct. A new email was sent for: <b>".$e."</b>.";
    }else{
        echo "<h2>Incorrect</h2>That is incorrect. Please go back.";
    }
}
include 'includes/footer.php';
