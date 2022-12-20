<!DOCTYPE html>
<html>
<body>
 
<?php
 
 
    session_start();
    
    
    echo '<script type ="text/JavaScript">';  
echo 'alert("You have logged out Successfully")';  
echo '</script>';  

session_destroy();
header('Refresh: 2; URL = index.php');
 
?>
 
</body>
</html>