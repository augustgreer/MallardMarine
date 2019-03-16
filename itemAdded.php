<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<body>

<?php
if(isset($_POST['Submit'])) {
     

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
        $description = trim($_POST['description']);
    }

    if(empty($_POST['price'])) {
        // Adds name to array
        $data_missing[] = 'price';
	} 	
	else {
        // Trim white space from the name and store the name
        $price = trim($_POST['price']);
    }

    if(empty($_POST['photo'])) {
        // Adds name to array
        $data_missing[] = 'photo';
	} 	
	else {
        // Trim white space from the name and store the name
        $photo = trim($_POST['photo']);
    }

    if(empty($_POST['featured'])) {
        // Adds name to array
        $data_missing[] = 'featured';
	} 	
	else {
        // Trim white space from the name and store the name
        $featured = trim($_POST['featured']);
    }

    if(empty($_POST['category'])) {
        // Adds name to array
        $data_missing[] = 'category';
	} 	
	else {
        // Trim white space from the name and store the name
        $category = trim($_POST['category']);
    }

    if (empty($data_missing)) {




    	require_once('mysql_connect.php');
         
        $sql = "INSERT INTO listings (title, description, price, photo, featured, category) VALUES (?, ?, ?, ?, ?, ?)";
         
        $expr = mysqli_prepare($dbc, $sql);
         
        mysqli_stmt_bind_param($expr, "ssisss", $title, $description, $price, $photo, $featured, $category);
         
        mysqli_stmt_execute($expr);
         
        $affected_rows = mysqli_stmt_affected_rows($expr);
         
        if($affected_rows == 1){             
            echo 'Student Entered';           
            mysqli_stmt_close($expr);            
            mysqli_close($dbc);            
        } 
        else {             
            echo 'Error Occurred<br />';
            echo mysqli_error();            
            mysqli_stmt_close($expr);             
            mysqli_close($dbc);
        }
    }
    	/*require_once('mysql_connect.php');

    	$sql = 'INSERT INTO listings VALUES ($title, $description, $price, $photo, $featured, $category)';

    	$valid = mysqli_query($dbc, $sql);

    	if ($valid) {
    		echo "Item added successfully";
    		mysqli_close($dbc);
    	}
    	else {
    		echo "Error: <br />";
    		echo mysqli_error($dbc);
    		mysqli_close($dbc);
    	}
    	
    }*/
    else {
    		echo "you must enter: <br />";
    		foreach ($data_missing as $empty) {
    			echo "$empty <br />";
    		}
    }
}
?>

<form action="http://www.mallardmarinetx.com/itemAdded.php" method="post">

	<h1>Add Item</h1>

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

</body>
</html>