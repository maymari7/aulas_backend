<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Par - Impar</h1>
    <form method="post" action="">
        Digite um numero <input type="number" id="num" name="num" required > <br> 
         <!--required te obriga a preencher um valor-->
        <input type="submit" velue="verificar!">
    </form>
    
    <?php
        if(count($_POST)==0)exit;
        $num=$_POST["num"];
        $res=($num%2==0)?"PAR":"IMPAR";

        echo "$num é $res";
    ?>
</body>
</html>