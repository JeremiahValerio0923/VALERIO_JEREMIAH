<?php
$newfile = fopen("hello_there.php", "w"); //funtion to create new php file

fclose($newfile); //closes the created file

file_put_contents("hello_there.php","<?php\n\n//This is a comment\n\necho'This is a test page!';\necho'Exam number two!';
\n//This is the end of a comment\n\n?>"); //finds the file hello_there.php to input the contents


echo "File(hello_there.php) created successfully";
?>