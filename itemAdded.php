<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<body>

<?php
if(isset($_POST['submit'])) {
     

    $data_missing = array();

    

    if(empty($_POST['title'])) {
        // Adds name to array
        $data_missing[] = 'title';
	} 	
	else {
        // Trim white space from the name and store the name
        $title = trim($_POST['title']);
    }

    if(empty($_POST['description'])) {
        // Adds name to array
        $data_missing[] = 'description';
	} 	
	else {
        // Trim white space from the name and store the name
        $title = trim($_POST['description']);
    }

    if(empty($_POST['price'])) {
        // Adds name to array
        $data_missing[] = 'price';
	} 	
	else {
        // Trim white space from the name and store the name
        $title = trim($_POST['price']);
    }

    if(empty($_POST['photo'])) {
        // Adds name to array
        $data_missing[] = 'photo';
	} 	
	else {
        // Trim white space from the name and store the name
        $title = trim($_POST['photo']);
    }

    if(empty($_POST['featured'])) {
        // Adds name to array
        $data_missing[] = 'featured';
	} 	
	else {
        // Trim white space from the name and store the name
        $title = trim($_POST['featured']);
    }

    if(empty($_POST['category'])) {
        // Adds name to array
        $data_missing[] = 'category';
	} 	
	else {
        // Trim white space from the name and store the name
        $title = trim($_POST['category']);
    }

    if (empty($data_missing)) {
    	$sql = "INSERT INTO inventory ". 
    	"title, description, price, photo, featured, category ".
    	"VALUES $title, $description, $price, $photo, $featured, $category";

    	$valid = mysql_query($sql, $dbc);

    	if ($valid) {
    		echo "Item added successfully";
    		mysqli_close($dbc);
    	}
    	else {
    		echo "Error: <br />";
    		echo mysqli_error();
    		mysqli_close($dbc);
    	}
    	
    }
    else {
    		echo "you must enter: <br />";
    		foreach ($data_missing as $empty) {
    			echo "$empty <br />";
    		}
    }
?>

<form action="https://localhost/itemAdded.php" method="post">

	<b>Add a New Student</b>

	<p>Title:
	<input type="text" name="title" size="30" value="" />
	</p>

	<p>Description:
	<input type="text" name="description" size="100" value="" />
	</p>

	<p>Price:
	<input type="number" name="price" size="30" value="" />
	</p>

	<p>Photo:
	<input type="text" name="photo" size="30" value="" />
	</p>

	<p>Featured (0 for no, 1 for yes):
	<input type="number" name="featured" size="30" maxlength="1" value="" />
	</p>

	<p>Category:
	<input type="text" name="category" size="30" value="" />
	</p>

	<p>
		<input type="submit" name="Submit" value="Send">
	</p>

	</form>>

}

</body>
</html>