<!DOCTYPE html>
<html>
<body>

    <?php
        include ('nav.inc');
    ?> 
    
<br>  
    
<form action="index.php" method="get">
    
    Name:<br> <input type="text" name="name"> <br>
    
    E-Mail: <br> <input type="text" name="mail"> <br>
    <br>
      
    Begrüßung: <select name="Begrüßung" size="1">
    <option>Guten Morgen</option>
    <option>Mahlzeit</option>
    <option>Guten Abend</option>
    <option>Gute Nacht</option>
    </select>
    
<h1>I say YES! to...</h1> 
    
    <select name="Adjektive" size="1">
    <option>kleine</option>
    <option>große</option>
    <option>süße</option>
    <option>putzige</option>
    </select>
    
    <select name="Farben" size="1">
    <option>blaue</option>
    <option>grüne</option>
    <option>rote</option>
    <option>schwarze</option>

    </select>
    <select name="Tiere" size="1">
    <option>Katzen</option> 
    <option>Eichhörnchen</option> 
    <option>Seehunde</option> 
    <option>Zebras</option> 
    </select>
    <br>
    
<input type="submit" value="Los geht's!">
    
</form>
    
    <?php 
        include ('footer.inc');
    ?>
    
    <?php
        //Falls die E-Mail nicht übertragen wurde (undefinierter Zustand tritt ein)
        if (empty($_POST['E-Mail'])){ 
                //Abbruch
            die("Keine E-Mail übermittelt");
        }
    
        //Falls E-Mail übermittelt wurde 
        else {
            file_put_contents("test.txt", $_POST['E-Mail'], FILE_APPEND);
        }
    ?>
    

    
</body>

</html>