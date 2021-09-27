<!DOCTYPE html>
<?php

    if(isset($_GET['operation'])) {
        $x = $_GET["num1"] ;
        $y = $_GET["num2"] ;
        $op = $_GET["operation"] ; 

        switch($op){
            case 'add' : $result = $x + $y ;
                break ;
            case 'sub' : $result = $x - $y ;
                
                break ;
            case 'mul' : $result = $x * $y ;
                break ;
            case 'div' : $result = $x / $y ;
                break  ;          

        }
    }


?>


  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<hr>
<div class="container">
  
<h1>Calculator </h1>
<hr>
    <form action="<?= $_SERVER["PHP_SELF"]?>"  method="get" >
        <input type="number" name="num1" value="<?= $x ?>">
        <br>
        <input type="number" name="num2"value="<?= $y ?>" >
  
    <br> <br>

        <button class="btn btn-primary" name="operation" value="add">+</button>
        <button class="btn btn-primary" name="operation" value="sub">-</button>
        <button class="btn btn-primary" name="operation" value="mul">x</button>
        <button class="btn btn-primary" name="operation" value="div">/</button>
    
    <br> <br>
        <input type="text" id="operation" value="<?= $op ?>" disabled>
      <br>  Result :<input type="number" id="result" value="<?= $result ?>" disabled>
    
    </form>

