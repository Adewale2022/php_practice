<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>

<h1>My first PHP class</h1>

    <?php

/* classess, functions, keywords and user-defined functions are not case sensitive 
but all variable names are case sensitive

// and # are used as single line comment 
The enclosed /with asteric between/ is used as multiple lines comment

. (dot) is used for catenation instead of + in kotlin

php have three variable scopes: local, static and global
A variable declear outside a function has a GLOBAL Scope and can only be accessed outside a function
A variable declear within a function is a LOCAL SCOPR and can only be accessed within the function
The global keyword is used to access a global vaiable from within a function---- To do this, use the global keyword before the variable inside the function
*/
    $txt = "Testing the code path of the installed web server";
    $name = "Adewale";
    

    // printing variable
    echo($txt); 
    echo($name);

    // using catenation to print text
    echo "Description: " .$txt. "Trainee". $name;

    // Any example of a global variable
        $globalValue = 56;
        // declaring or creating a function
    function globalVariable(){
        // The variable globalValue can not be accessed by this function. Because it's declared outside the function
        echo "<br> The global variable inside the function $globalValue <br>";
    }

    // calling the function
    globalVariable();
    echo "The variable $globalValue <br>";


$testGlobalValue = 87;
function testGlobal (){
    // adding the keyword global makes the variable accessible outside the function
   global $testGlobalValue;
    echo " output the variable inside the function: $testGlobalValue <br>";
}

testGlobal();
echo "output the variable OUTSIDE the function $testGlobalValue <br>";
    
          
$int = 70;
var_dump($int) // to return the boolean if the variable os true or false

 echo rand();
echo random_int(10, 100);
    ?>

</body>
</html>