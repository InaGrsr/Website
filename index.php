<?php
    $text = $_REQUEST['Adjektive'] ." ". $_REQUEST['Farben'] ." ". $_REQUEST['Tiere'] ."\n";
    file_put_contents("test.txt", $text, FILE_APPEND);

?>


<!DOCTYPE html>
<html>
<head> </head>
<body> 
    
<?php
    include ('nav.inc');
?>
    
    
<?php 
    echo $_GET['Begrüßung'] ."\n"; 
    echo $_GET['name'];
    echo ", <br>";
    echo ' I Say YES!...to: <br>'; 
    echo $text; 
?>
    
    <?php 
        include ('footer.inc');
    ?>
    
    </body>
</html>