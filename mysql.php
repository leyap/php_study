<?php
$mysqli = new mysqli("localhost", "joeuser", "somepass", "test");
if (mysqli_connect_errno()) {
	printf("Connected failed: %s\n", mysqli_connect_error());
	exit();
} else {
	printf ("Host information: %s\n", mysqli_get_host_info($mysqli));
}
?>
