<?php include 'partials/header.php'; ?>
<div class="container">
	<h2>Register</h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Register/RegisterUser'); ?>

	<div class="mb-3">
		<label for="firstName" class="form-label">First name</label>
		<input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" name="fname">
	</div>
	<div class="mb-3">
		<label for="lastName" class="form-label">Last name</label>
		<input type="text" class="form-control" id="lastName" aria-describedby="emailHelp" name="lname">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email address</label>
		<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" class="form-control" id="password" name="password">
	</div>
	<div class="mb-3">
		<label for="passwordAgain" class="form-label">Password Again</label>
		<input type="password" class="form-control" id="passwordAgain" name="passwordAgain">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>
<?php include 'partials/footer.php'; ?>
