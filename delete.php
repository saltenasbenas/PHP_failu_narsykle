


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
<title>Delete Your File</title>

</head>
<body>


<?php
$file = $_GET['file'];

unlink($file);

echo 'Deleted successful <br>';
echo "<a href='index.php'>Back to main page</a>";

?>




</body>
</html>

