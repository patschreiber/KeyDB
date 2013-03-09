
<div class = "content-users">
<?php 
foreach ($users as $users) {

	//print_r(array_values($users)); 
	echo '<span class= "title">Profile: ' . $users->username . ' #' . $users->id_user . '</span>'; 
	echo '<p>' . $users->last_name . ", " . $users->first_name . '</p>'; 
	echo '<p>' . $users->first_name . '</p>' . '<hr />';

}

?>
</div>