<?php

require_once('mysql_connect.php');

$query = "SELECT title, description, price, photo, featured FROM inventory";

$response = @mysql_query($dbc, $query);

if ($respone) {
	echo '<table>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Price</td>
				<td>Photo</td>
				<td>Featured</td>
				<td>Category</td>
			</tr>';

		while ($row = mysql_fetch_array($respone)) {
			echo '<tr><td>' . $row['title'] .
				 '</td><td>' . $row['description'] .
				 '</td><td>' . $row['price'] .
				 '</td><td>' . $row['photo'] .
				 '</td><td>' . $row['featured'] .
				 '</td><td>' . $row['category'] . '</tr>';
		}
		echo '</table>';
}

else {
	echo 'cannot execute query<br />';
	echo mysql_error($dbc);
}

mysql_close($dbc);

?>