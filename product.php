<?php echo file_get_contents("header.html");
    $title=$_GET['product'];
    require_once('mysql_connect.php');

$sql = "SELECT * FROM listings where title='$title'";
#$sql = "SELECT * FROM inventory where title='$title'";

$response = mysqli_query($dbc, $sql);

if (!$response) {
	echo 'cannot execute query<br />';
	echo mysqli_error($dbc);
}

else {
    $product = mysqli_fetch_array($response);
    echo '<div class="product-page">' .
    '<h1 class="top-margin center-text header">' . $product['title'] . '</h1>' .
    '<img class="center product-image" src=' . $product['photo'] . '.JPG>' .
    '<h4>' . $product['description'] . '</h4>' .
    '<h3>$' . $product['price'] . '</h3>';
}
    echo '<h5><a href="./contactUs.html">Contact Us</a> for more information about this product.</h5>' . '</div>'; 
echo file_get_contents("footer.html"); ?>