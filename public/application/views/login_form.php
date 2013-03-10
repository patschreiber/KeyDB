<div class= "wrapper">
	<div class= "login-page-content">
		<div id= "login-form">
			<p>Sign In</p>
			<?php
				echo form_open('login/validateLogin'); //login controller
				echo form_input('username', '', 'placeholder= "Username"');
				echo form_password('password', '', 'placeholder= "Password"'); //Name, value
				echo form_submit('submit', 'Sign In');
				echo anchor('password_recovery/view', 'Forgot Password', 'id= "forgot-password-link"');
				echo form_close();
			?>
			<div id= "login-error">
				<?php 				
					if(isset($error)) {
						echo $error;
					} 
				?>
			</div>
		</div>
	
		<div id= "create-account">
		<p id= "create-account-large">Sign up. Play with your friends.</p>
		<p id= "create-account-small">Lootr lets you collect items and trade them with your friends, acquaintances, and random people around the world.</p>
			<div class= "signup">
					<?php
						echo form_open('login/createAccount');
						echo '<div class = "longform">' . form_input('email', set_value('email'), 'placeholder= "Email Address"') . '</div>';
						echo '<div class = "longform">' . form_input('username', set_value('username', ''), 'placeholder= "Username"') . '</div>'; //CI sets the value of the user input if the page needs to be reloaded.
						echo '<div class= "short-inline">' . form_input('first_name', set_value('first_name', ''), 'placeholder= "First Name"');
						echo form_input('last_name', set_value('last_name', ''), 'placeholder= "Last Name"') . '</div>';
						echo '<div class= "short-inline">' . form_password('password', '', 'placeholder= "Password"');
						echo form_password('password2', '', 'placeholder= "Confirm Password"') . '</div>';
						echo '<div class = "longform">' . form_submit('create_account', 'Create Account') . '</div>';
						echo form_close();
					?>
			</div>
			<div class= "error">
				<?php echo validation_errors('<p class= "error">'); ?>
			</div>			
		</div>
	</div>
</div>