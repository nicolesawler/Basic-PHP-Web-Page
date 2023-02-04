<?php include 'includes/header.php';?>

<h1><?php echo "Hello, " . $_SESSION["fname"] . " " . $_SESSION["lname"] ?></h1>
<h2>Your role is <?php echo $_SESSION["role"] ?>
<br><br>
<h1>How to Submit a Help Ticket</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/xhtkZm3lbp8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<?php include 'includes/footer.php';?>