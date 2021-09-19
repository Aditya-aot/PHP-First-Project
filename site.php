<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<hr>
<hr>

<form action="site.php" method="get">
        name : <input type="text" name="name"> 
        age : <input type="number" name="age" > 
        <input type="submit">  
    </form>

    <form action="site.php" method="post">
       apples : <input type="checkbox" name="name[]" value="apple"> <br>
       oranges : <input type="checkbox" name="name[]" value="oranges"> <br>
       pears : <input type="checkbox" name="name[]" value="pears"> <br>
      <input type="submit">  
    </form>

<?php

$name = "john" ;
$age = 34 ;

echo("hello world") ;
echo("there once was a man named $name <br>") ;
echo("he is $age years old <br>") ;
echo("but didn't like that age <br>") ;

// string
echo("<hr>") ;
echo strtolower($name) ;
echo strtoupper($name) ;
echo strlen($name) ;
echo $name[3] ;
echo str_replace("jo","ho" , $name) ;

//  number ------------------------------
echo "<br>" ;
echo 5+9 ;
echo "<br>" ;
echo pow(2,4) ;


// user input -------------------------------
echo "<hr>" ;
echo "your name : " ;
echo $_GET["name"] ;
echo "<br>";
echo "your age : " ;
echo $_GET["age"] ;


// Array -----------------------------
$names = array("kevin", "karen","oscar","john" ) ;


//   checkboxes ---------------------------
$name = $_POST["name"] ;
echo $name[0] ;

echo "<br>" ;
$grades = array("jim"=>"a+", "pam"=>"b-", "oscar"=>"c") ;
echo $grades["jim"] ;



// function -----------------------------
echo "<br>" ;
function sayhi() {
    echo "hello user " ;

}

sayhi() ;
//  if statements --------------------------
echo "<br>" ;

$ismale = true ;
if ($ismale) {
    echo "you are male" ;
}
else {
    echo "you are not male" ;
}

?>


   
</body>
</html>