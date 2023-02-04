<?php include 'includes/header.php';?>

<div id="">
    <form action="login.php" method="post" class="form-signin">
    <h1>IT Support System</h1>
<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="" class="sr-only">Title</label>
      <select class="form-control" name="title" class="">
            <option value="Jr" selected>Jr. </option>
			<option value="Mr" >Mr. </option>
			<option value="Ms" >Ms.</option>
			<option value="Mrs" >Mrs. </option>
			<option value="Dr" >Dr. </option>
		</select>
      <label for="" class="sr-only">First Name</label>
      <input name="fName" type="text" id="" class="form-control" placeholder="first name" required autofocus>
      <label for="" class="sr-only">Last Name</label>
      <input name="lName" type="text" id="" class="form-control" placeholder="last name" required>
      <label for="" class="sr-only">Your Role</label>
      <select class="form-control" name="role" class="">
			<option value="Admin">Admin </option>
			<option value="Manager" >Manager </option>
			<option value="CEO" >CEO </option>
		</select>
        <br><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    </form>


</div> 

<?php include 'includes/footer.php';?>
