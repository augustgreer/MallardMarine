<html>
<head>
	<title>Add Item</title>
	<link href="./style.css" type="text/css" rel="stylesheet">
</head>

<body>
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
</body>

</html>