<h1>Sign Up</h1>
<fieldset>
	<legend>Personal Information</legend>
	<?php
		echo form_open('signup/createAccount');
		echo form_input('email', set_value('email', 'Email Address'));
		echo form_input('first_name', set_value('first_name', 'First Name')); //CI sets the value of the user input if the page needs to be reloaded.
		echo form_input('last_name', set_value('last_name', 'Last Name'));
	?>
</fieldset>

<fieldset>
	<legend>Login Info</legend>
	<?php 
		echo form_input('username', set_value('username', 'Desired  Username'));
		echo form_password('password', 'Password');
		echo form_password('password2', 'Passwtwo');
		
		echo form_submit('create_account', 'Create Account');
	?>
	<?php echo validation_errors('<p class= "error">'); ?>
</fieldset>