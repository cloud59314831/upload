<html>
<body>
<button onclick="window.location.href='https://metube.skyrise.repl.co'">Go back to the main web</button>
<?php

/* Get the name of the uploaded file */
$filename++;
$location = "upload/img" .$filename. ".png";
$i=1;
while(file_exists($location)){
  $filename++;
  $location = "upload/img" .$filename. ".png";
}
if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
        echo '<p>file uploaded successfully</p>';
}else{
  echo '<b>file uploaded failed</b>';
}

?>

</body>
</html>