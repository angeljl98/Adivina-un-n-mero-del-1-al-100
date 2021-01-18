<?php
           $campo1 = $_POST['campo1'];
           echo "Hola ".$campo1."<br>";


        if(isset($_POST['number'])) {
           echo $campo1."<br>";
           $number = $_POST['number'];
           $incremento=0;
           $test1 = $_POST['intentos'];
           $test2 = $_POST['intentos'];

           if ($test1 >= $test2) {
           $incremento=1;
           } else {
           $incremento=0;
           }
           $intentos = $_POST['intentos'] + $incremento;
           
           $guess  = $_POST['guess'];
           $adivinanzas1  = $_POST['adivinanzas1'];
           $adivinanzas2  = $_POST['adivinanzas2'];
           $adivinanzas3  = $_POST['adivinanzas3'];
           $adivinanzas4  = $_POST['adivinanzas4'];
           $adivinanzas5  = $_POST['adivinanzas5'];
           $adivinanzas6  = $_POST['adivinanzas6'];
           $adivinanzas7  = $_POST['adivinanzas7'];
           $adivinanzas8  = $_POST['adivinanzas8'];
           $adivinanzas9  = $_POST['adivinanzas9'];
           $adivinanzas10  = $_POST['adivinanzas10'];

           switch ($intentos) {
            case 1:
                $adivinanzas1 = $guess;
                //echo "adi 1 ".$adivinanzas1."<br>";
                break;
            case 2:
                $adivinanzas2 = $guess;
                //echo "adi 2 ".$adivinanzas2."<br>";
                break;
            case 3:
                $adivinanzas3 = $guess;
                //echo "adi 3 ".$adivinanzas3."<br>";
                break;
            case 4:
                $adivinanzas4 = $guess;
                //echo "adi 4 ".$adivinanzas4."<br>";
                break;
            case 5:
                $adivinanzas5 = $guess;
                //echo "adi 5 ".$adivinanzas5."<br>";
                break;
            case 6:
                $adivinanzas6 = $guess;
                //echo "adi 6 ".$adivinanzas6."<br>";
                //break;
            case 7:
                $adivinanzas7 = $guess;
                //echo "adi 7 ".$adivinanzas7."<br>";
                break;
            case 8:
                $adivinanzas8 = $guess;
                //echo "adi 8 ".$adivinanzas8."<br>";
                break;
            case 9:
                $adivinanzas9 = $guess;
                //echo "adi 9 ".$adivinanzas9."<br>";
                break;
            case 10:
                $adivinanzas10 = $guess;
                //echo "adi 10 ".$adivinanzas10."<br>";
                break;
                }
           
  
           
        } else {
           $intentos = 0;
           $number = rand(1,100);
           $adivinanzas1 = 0;
           $adivinanzas2 = 0;
           $adivinanzas3 = 0;
           $adivinanzas4 = 0;
           $adivinanzas5 = 0;
           $adivinanzas6 = 0;
           $adivinanzas7 = 0;
           $adivinanzas8 = 0;
           $adivinanzas9 = 0;
           $adivinanzas10 = 0;
           
}
?>

<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Adivina un número del 1 al 100</title>
        <link rel="stylesheet" href="css/adivina.css" />
</head>

        <script type="text/javascript" language="JavaScript">
           document.getElementById("guess").focus();
        </script>

<body>
        <h1>Adivina un número del 1 al 100</h1>
        <p>Tienes hasta 10 oportunidades.</p>
                <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" name="guess-a-number">
                    <label>Ingresa un número:</label><br/ >
                    <input type="text" id="guess" name="guess" />
                    <input name="number" type="hidden" value="<?= $number ?>" />
                    <input name="intentos" type="hidden" value="<?= $intentos ?>" />
                    <input name="adivinanzas1" type="hidden" value="<?= $adivinanzas1 ?>" />
                    <input name="adivinanzas2" type="hidden" value="<?= $adivinanzas2 ?>" />
                    <input name="adivinanzas3" type="hidden" value="<?= $adivinanzas3 ?>" />
                    <input name="adivinanzas4" type="hidden" value="<?= $adivinanzas4 ?>" />
                    <input name="adivinanzas5" type="hidden" value="<?= $adivinanzas5 ?>" />
                    <input name="adivinanzas6" type="hidden" value="<?= $adivinanzas6 ?>" />
                    <input name="adivinanzas7" type="hidden" value="<?= $adivinanzas7 ?>" />
                    <input name="adivinanzas8" type="hidden" value="<?= $adivinanzas8 ?>" />
                    <input name="adivinanzas9" type="hidden" value="<?= $adivinanzas9 ?>" />
                    <input name="adivinanzas10" type="hidden" value="<?= $adivinanzas10 ?>" />
                    <input name="submit" type="submit" value="Adivínalo!" />
                </form>
        
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" name="new-number">
            <input name="submit" type="submit" value="Nuevo Juego" />
        </form>

<?php
if($_POST["guess"]){

    // grab the user input guess
    $guess  = $_POST['guess'];
    $number  = $_POST['number'];
    $intentos = $_POST['intentos'];

    if (($guess < $number) and ((9-$intentos) != 0)){ 
    	echo "Intenta con un número más alto."."<br>";
        echo "Te quedan ".(9-$intentos)." intentos"."<br>";
        
        $i=1;
        while ($i <= $intentos+1):
            echo "No es ";
            switch ($i) {
            case 1:
                $lectura=$adivinanzas1;
                echo $lectura."<br>";
                break;
            case 2:
                $lectura=$adivinanzas2;
                echo $lectura."<br>";
                break;
            case 3:
                $lectura=$adivinanzas3;
                echo $lectura."<br>";
                break;
            case 4:
                $lectura=$adivinanzas4;
                echo $lectura."<br>";
                break;
            case 5:
                $lectura=$adivinanzas5;
                echo $lectura."<br>";
                break;
            case 6:
                $lectura=$adivinanzas6;
                echo $lectura."<br>";
                break;
            case 7:
                $lectura=$adivinanzas7;
                echo $lectura."<br>";
                break;
            case 8:
                $lectura=$adivinanzas8;
                echo $lectura."<br>";
                break;
            case 9:
                $lectura=$adivinanzas9;
                echo $lectura."<br>";
                break;
            case 10:
                $lectura=$adivinanzas10;
                echo $lectura."<br>";
                break;
                }
                $i++;
        endwhile;
        
    }elseif(($guess > $number) and ((9-$intentos) != 0)){       
    	echo "Intenta con un número más bajo."."<br>";
        echo "Te quedan ".(9-$intentos)." intentos"."<br>";
        
        $i=1;
        while ($i <= $intentos+1):
            echo "No es ";
            switch ($i) {
            case 1:
                $lectura=$adivinanzas1;
                echo $lectura."<br>";
                break;
            case 2:
                $lectura=$adivinanzas2;
                echo $lectura."<br>";
                break;
            case 3:
                $lectura=$adivinanzas3;
                echo $lectura."<br>";
                break;
            case 4:
                $lectura=$adivinanzas4;
                echo $lectura."<br>";
                break;
            case 5:
                $lectura=$adivinanzas5;
                echo $lectura."<br>";
                break;
            case 6:
                $lectura=$adivinanzas6;
                echo $lectura."<br>";
                break;
            case 7:
                $lectura=$adivinanzas7;
                echo $lectura."<br>";
                break;
            case 8:
                $lectura=$adivinanzas8;
                echo $lectura."<br>";
                break;
            case 9:
                $lectura=$adivinanzas9;
                echo $lectura."<br>";
                break;
            case 10:
                $lectura=$adivinanzas10;
                echo $lectura."<br>";
                break;
                }
                $i++;
        endwhile;
        
    }elseif($guess == $number){      
    	echo "<p>Excelente!! Lo adivinaste!!</p>";
        echo "<p>Lo lograste en ",round($intentos+1), " intentos!.</p>";
    }elseif(9-$intentos <= 0){
        echo "<p>Suerte para la próxima!!</p>";
        echo "<p>El número era ",$number, "!.</p>";
    }
}
?>

</body>
</html>
