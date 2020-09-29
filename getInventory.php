<?php echo file_get_contents("header.html");

/*require_once('mysql_connect.php');

$sql = "SELECT * FROM listings";

$response = mysqli_query($dbc, $sql);

if (!$response) {
	echo 'cannot execute query<br />';
	echo mysqli_error($dbc);
}

else {
		echo '<h1 class="header biggest-text top-margin center-text">Our Inventory</h1>';
		echo '<div id="listings">';
		while ($row = mysqli_fetch_array($response)) {
			echo '<a href="product.php?product=' . $row['title'] . '"><div class="item">' .
				'<div class="item-title">' . $row['title'] . '</div>' .
				'<div><img class="item-photo" src=' . $row['photo'] . '.JPG></div>' .
				#'<div class="item-description">' . $row['description'] . '</div>' .
				'<div class="item-price">$' . $row['price'] . '</div>' .
				#'<div class="item-featured">' . $row['featured'] . '</div>' .
				#'<div class="item-category">' . $row['category'] . '</div>' .
				'</div></a>';
		}
		echo '</div>';
}

mysqli_close($dbc);*/

echo '<h1 class="header biggest-text top-margin center-text">Our Inventory</h1>';
echo '<h1 class="top-margin center-text">Coming Soon!</h1>';
echo '</body></html>'; ?>
