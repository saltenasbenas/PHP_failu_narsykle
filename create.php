



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu"
	rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet"
	href="path/to/font-awesome/css/font-awesome.min.css">
<title>Create Your File</title>

</head>
<body>



<?php
$dir = $_POST['folder'];

mkdir($dir, 777);

echo 'File created succesful <br>';
echo "<a href='index.php'>Back to main page</a>";
?>




</body>
</html>