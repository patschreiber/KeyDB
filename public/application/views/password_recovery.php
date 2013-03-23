<div class= "img-glass">
<div id= "header-marquee">
<div class= "wrapper">
	<div class= "header-logged-out">
	</div>
	<div id= "pw-recovery">
		<h3>Retrieve Your Account</h3>
		<div class= "divider"></div>
			<?php
				if(!isset($pwRecoverUsername)) {
					echo form_open('password_recovery/identify');
					echo 'Enter your email or username associated with the account.';
					echo '<p class= "pw-recovery-align">' . form_input('identification', '', 'placeholder= "Email or Username"');
					echo anchor('#', 'I don&#39;t remember my email or username', 'id= "forgot-password-link"') . '</p>';
				}
				else if(isset($pwRecoverUsername)) {
					echo '<p>Email: ' . $pwRecoverEmail . '</p>';
					echo '<p>Username: ' . $pwRecoverEmail . '</p>';
					echo 'An email to reset your password has been sent to the email provided on your account.';
				}	
			?>
	</div>
</div>
</div>
</div>