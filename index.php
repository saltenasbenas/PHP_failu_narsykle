

<?php

session_start();

if( !(isset($_SESSION['prisijunges']) && $_SESSION['prisijunges']==1)){
    
    header("location: login.php");
    die("Slapta Informacija");
} 


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700"
	rel="stylesheet">
<title>Failu serveris</title>
</head>
<body>

<div class="logOut">
<a  class="sign1" href="login.php?logout=1"  >Log Out</a> <br><br></div>


<?php

// Paklausti:

// 1. Kaip uzdeti piktograma ant folderiu?
// 2. Kaip istrinti folderi, leidzia istrinti tik faila is folderio?
// 3. Kaip sukurti faila i direktorija, kuria pats pasirinkciau? Leidzia sukurti tik i ta direktorija, kurioje yra kuriamas kodas? Kodel?
// 4. Kaip redaguoti ir pakeisti faila/teksta?
function showDir($dirName)
{
    $dir = opendir($dirName);
    echo "<table border='1'>";

 
    echo "<tr>";
    echo "<th>";
    echo "File";
    echo "</th>";
    echo "<th>";
    echo "Name";
    echo "</th>";
    echo "<th>";
    echo "Edit";
    echo "</th>";
    echo "<th>";
    echo "Delete";
    echo "</th>";
    echo "</tr>";
    
    while ($item = readdir($dir)) {

        echo "<tr>";
        echo "<td>";

        if (is_file($dirName . '/' . $item)) {
            $ext = pathinfo($dirName . '/' . $item, PATHINFO_EXTENSION);
            if ($ext == 'exe') {
                echo "<img  class='img' src='images/exe.svg' alt='logo' />";
            }
            if ($ext == 'svg') {
                echo "<img  class='img' src='images/svg.svg' alt='logo' />";
            }
            if ($ext == 'php') {
                echo "<img  class='img'src='images/php.svg' alt='logo' />";
            }
            if ($ext == 'jpg') {
                echo "<img  class='img'src='images/jpg.svg' alt='logo'/>";
            }
            if ($ext == 'css') {
                echo "<img  class='img'src='images/css.svg' alt='logo' />";
            }
            if ($ext == 'html') {
                echo "<img  class='img' src='images/index.svg' alt='logo' />";
            }
            if ($ext == 'rar') {
                echo "<img  class='img' src='images/rar.svg' alt='logo' />";
            }
            if ($ext == 'zip') {
                echo "<img  class='img' src='images/zip.svg' alt='logo' />";
            }

            if ($ext == 'js') {
                echo "<img  class='img' src='images/js.svg' alt='logo' />";
            }
            if ($ext == 'exe') {
                echo "<img  class='img' src='images/else.svg' alt='logo' />";
            }
            if ($ext != 'js' && $ext != 'jpg' && $ext != 'html' && $ext != 'css' && $ext != 'php' && $ext != 'exe' && $ext != 'zip' && $ext != 'rar') {
                echo "<img  class='img' src='images/else.svg' alt='logo' />";
            }
            if ($ext == '') {
                echo "<img  class='img' src='images/else.svg' alt='logo' />";
            }
        } else
            echo "<img  class='img' src='images/folder.svg' alt='logo' />";
        if (is_dir($dirName . '/' . $item)) {
            $ext = pathinfo($dirName . '/' . $item, PATHINFO_EXTENSION);
            if ($ext == 'exe') {
                echo "<img  class='img' src='images/exe.svg' alt='logo' />";
            }
        }
        // if (is_file($dirName)) {
        // $ext = pathinfo($dirName , PATHINFO_FILENAME);
        // if ($ext == 'ciklai') {
        // echo "<img class='img' src='images/exe.svg' alt='logo' />";
        // }

        // }

        echo "</td>";
        echo "<td>";

        if (is_dir($dirName . '/' . $item)) {
            echo "<a href='index.php?dir=" . $dirName . '/' . $item . "'>";
            echo $dirName . '/' . $item;
            echo "</a>";
        } else {
            echo $dirName . '/' . $item;
        }

        echo "</td>";

        echo "<td>";
        if (is_file($dirName.'/'.$item)) {
            $ext = pathinfo($dirName.'/'.$item, PATHINFO_EXTENSION);
            
            if ($ext == 'txt' || $ext == 'log' || $ext == 'class' || $ext == 'php' || $ext == 'html' || $ext == 'css' || $ext == 'js' ) {
                echo "<a href='out.php?file=".$dirName.'/'.$item."' target='_blank'><h4>Edit</h4></a>";
            }
            else{
                echo "Inaccessible";
            }}
            
            else{
                echo "Inaccessible";
            }
        
        
        
        
        
        
        echo "</td>";

        echo "<td>";
        if (is_dir($dirName . '/' . $item) && $item != '.' && $item != '..') {
            echo 'Inaccessible';
            // showDir($dirName . '/' . $item);
        }
        if (is_file($dirName . '/' . $item)) {
            $ext = pathinfo($dirName . '/' . $item, PATHINFO_EXTENSION);

            if ($ext == 'php' || $ext == 'js' || $ext == 'css' || $ext == 'txt' || $ext == 'html' || $ext == 'jpg' || $ext == 'svg' || $ext == 'txt' || $ext == 'zip' || $ext == 'rar') {

                echo "<a href='delete.php?file=" . $dirName . '/' . $item . "' target='_blank'>Delete</a>";
            } else {
                echo "<a href='delete.php?file=" . $dirName . '/' . $item . "' target='_blank'>Delete</a>";
            }
        }
        

        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";
    closedir($dir);
}

if (isset($_GET['dir'])) {
    $dir = $_GET['dir'];
} else {
    $dir = 'C:/xampp/htdocs';
}

showDir($dir);

?>


 <form action="create.php" method="POST" class="form1">
		Create New Folder:
		<input type="text" name="folder" class="un " > 
		<input type="submit" value="Create" class="submit" >
	</form>


	<!--    <form action="create2.php?dir -->

	<!--    " method="post"> -->
	<!--             Pridekite nauja faila: -->
	<!--             <input type="text" name="folder"> -->
	<!--             <input type="submit" value="Sukurti"> -->
	<!--         </form> -->

 <?php
 if (isset($_FILES['failas'])){
     echo $_FILES['failas']['tmp_name']."<br>";
     if ($_FILES['failas']['error']!=0){
         echo "Something Went Wrong.. Try Again";
     }else{
         
         
         if ($_FILES['failas']['size']>2000000){
             echo "Failas per didelis";
         }elseif (! file_exists( "C:/xampp/htdocs/narsyklePHP/".$_FILES['failas']['name'])){
             
             $filePath='C:/xampp/htdocs/narsyklePHP/images/';
             
             $ext=pathinfo($_FILES['failas']['name'], PATHINFO_EXTENSION );
             
             //$fileName=rand(1,10000).'.'.$ext;
             $fileName=str_replace(['Ä…','Å¾','Ä—','Ä™',' '], ['a','z','e','e','_'], $_FILES['failas']['name']);
             $fileName=strtolower($fileName);
             
             if ( move_uploaded_file($_FILES['failas']['tmp_name'], $filePath.$fileName)){
                 echo "File Uploaded Succesful";
                 echo "<img src='images/$fileName'>";
             }else{
                 echo "Uploading Error";
             }
             
         }else{
             echo "there is already a file with the same name in this location";
         }
         
     }
     
     
 }




?>

<form action="index.php" method="post" enctype="multipart/form-data" class="form1">
Upload Files:
		<input type="file" name="failas" class="un " ><br> 
		<input type="submit" name="Issiusti" class="submit"><br>
	</form>





</body>
</html>