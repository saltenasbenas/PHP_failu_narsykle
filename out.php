<?php
$file = $_GET['file'];

?>

 

<?php

if (file_exists($file)) {
    $text = file_get_contents($file);
} else {
    // $naujasFailas = fopen('new.txt', 'w');
    header("Refresh: 0");
}

if (isset($_POST['tekstas'])) {
    $tekstas = $_POST['tekstas'];

    file_put_contents($file, $tekstas);
    echo "<b class='sign'>Saved successful!<b>";
    header("Refresh: 1");
}

?>



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
<title>Edit Your File</title>

</head>
<body>


	<form method="post" class="form1">
		<textarea name="tekstas" rows="30" cols="100">
 <?=$text ?>
</textarea>
		<br> <input type="submit" name="submit" value="Save" class="submit1">
	</form>



</body>
</html>



