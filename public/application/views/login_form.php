<div class= "wrapper">
	<div id= "login-form">
		<p>Sign In</p>
		<?php
			echo form_open('login/validateLogin'); //login controller
			echo form_input('username', 'Username');
			echo form_password('password', 'Password'); //Name, value
			echo form_submit('submit', 'Sign In');
			//echo anchor('login/signup', 'Create Account');
		?>
	</div>
</div>