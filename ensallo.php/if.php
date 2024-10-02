<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>selecicona una funcion</h1>
    <form action="" method="GET">
        <label for="resu">cal 1:</label>
        <input type="number" name="cal1" min="5" max="10">
        <br>
        <label for="">cal 2:</label>
        <input type="number" name="cal2" min="5" max="10">
        <br>
        <label for="">cal 3:</label>
        <input type="number" name="cal3" min="5" max="10">
        <br>
        <label for="">cal 4:</label>
        <input type="number" name="cal4" min="5" max="10">
        <br>
        <label for="">cal 5:</label>
        <input type="number" name="cal5" min="5" max="10">
        <br>
        <button name="btn" value="btn" id="btn" type="submit">calcula</button>
        </form>
        <?php
        if(isset($_GET['btn'])){
            $cal1=$_GET['cal1'];
            $cal2=$_GET['cal2'];
            $cal3=$_GET['cal3'];
            $cal4=$_GET['cal4'];
            $cal5=$_GET['cal5'];

            $res = ($cal1+$cal2+$cal3+$cal4+$cal5)/5;
            echo"promedio es: $res";
            if($res==10)
            echo"bueno";
        else{
            if($res==9||$res==8)
            echo"masomenos";
        }
            if($res==7||$res==6)
            echo"ok";
        else{
            echo"no";
        }
        }
        
            
    
        ?>
