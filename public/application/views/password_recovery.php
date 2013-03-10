<div class= "wrapper">
<h3>Retrieve Your Account</h3>
	<div class= "pw-recovery">
		<?php
			if(!isset($pwRecoverUsername)) {
				echo form_open('password_recovery/identify');
				echo '<p>Enter your email or username associated with the account.</p>';
				echo form_input('identification', '', 'placeholder= "Email or Username"');
				echo anchor('#', 'I don&#39;t remember my email or username', 'id= "forgot-password-link"');
			}
			else if(isset($pwRecoverUsername)) {
				echo '<p>Email: ' . $pwRecoverEmail . '</p>';
				echo '<p>Username: ' . $pwRecoverEmail . '</p>';
				echo '<p>An email to reset your password has been sent to the email provided on your account.</p>';
			}
			
		?>
	</div>
</div>