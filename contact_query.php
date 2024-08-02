<?php
	include("functions.php");

	$dblink = db_connect("contact_data");
	$sql = "SELECT * FROM `form_data` WHERE 1";
	$results = $dblink->query($sql) or die("<h2>Something went wrong with $sql</h2>" . $dblink->error);

	while ($data = $results->fetch_array(MYSQLI_ASSOC)) {
		echo '<tr>';
		echo '<td>' . htmlspecialchars($data['first_name']) . '</td>';
		echo '<td>' . htmlspecialchars($data['last_name']) . '</td>';
		echo '<td>' . htmlspecialchars($data['email']) . '</td>';
		echo '<td>' . htmlspecialchars($data['phone']) . '</td>';
		echo '<td>' . htmlspecialchars($data['username']) . '</td>';
		echo '<td>' . htmlspecialchars($data['password']) . '</td>';
		echo '<td>' . htmlspecialchars($data['comments']) . '</td>';
		echo '</tr>';
	}
?>
