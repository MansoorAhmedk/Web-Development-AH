<?php

// $name = "AH Young World Academy";
// $num1 = 23;

// print $num1;
// Arthmatic Operators
// +, - * / % **
//Assignment Operators
// =, +=, -=, *=, /=, 
// Comparission Operators
// <,>, <=,>=,==,===
// Logical Operators
// And (&&), Or (||), Not (!)
//increment and decrement operators
// ++, --



$num2 = 34;
$num3 = 25;

$sum = 2**3;
// echo $sum;



// $num2 /= 10; // 34/10=3.4
// echo $num2;
// echo "Hello World!";
// echo 12 + 23;

// $com = $num2 != $num3;
// echo $com;
// $is_age = 98;
// if($is_age == 18){
//     echo "You are eligible for vote.";
// }elseif($is_age > 18){
//     echo "You are above 18 and You are eligible for vote";
// }elseif($is_age >= 12){
//     echo "You are under 18 and You are not eligible for vote";
// }else{
//     echo "Wallah, you are a child";
// }

// $num = 0;
// if($num % 2 == 0){
//     echo "The Number ".$num." is Even Number";
// }else{
//     echo "The Number ".$num." is Odd Number";
// }

// 1 positive
// 0  Nutral Number
// -1 Negative


//    if($num > 0){
//     echo    "The Number ".$num." is Positive Number";
//    }elseif($num < 0){
//     echo    "The Number ".$num." is Negative Number";
//    }else{
//     echo    "The Number ".$num." is Zero.";
//    }   
   
   // create a login system
   // username =
   // password ==
   





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP First Class</title>
</head>
<body>
    <!-- <h1>Hello World!</h1> -->
    <?php
    // $username ="demouser";
    // $pass = "12345";


    // if($username == "demouser" && $pass == "12345"){
    //     echo "Welcome Demo User!";
    // }else{
    //     echo "Invalid Credentials!";
    // }
// switch statement

// $day ="Saturday";

// switch ($day) {
//     case 'Monday':
//     case 'Tuesday':
//     case 'Wednesday':
//     case 'Thursday';
//         echo "It's Working day";
//         break;
//     case 'Friday':
//         echo "It's Friday. It is a Half day";
//         break;    
//     default:
//         echo "It's Weekend. Let's have some fun with friends.";
//         break;
// }


// function greet($name){
//     echo "Hello, ".$name;
// }

// greet('Saeed');


    ?>



<form action="#" method="Post">
    <fieldset>
        <legend>username*</legend>
        <input type="text" name="uname" id="uname">
    </fieldset>
    <fieldset>
        <legend>Password*</legend>
        <input type="password" name="pass" id="">
    </fieldset>
    <input type="submit" name="" id="">
</form>

<br>
<br>

<?php
$username = "demo";
$password = "12345";
// $userInput = $_GET['uname'];
// $userPass = $_GET['pass'];

print_r($_POST);
// echo $userInput;
// echo $userPass;
?>
<br>
<?php


// if($userInput == $username && $userPass == $password){
//     echo "Welcome User!";
// }else{
    ?>
    <br>
    <?php
    //echo "Invalid Credentials";
//}

// dd($_POST)
$num = 1234;
var_dump($username);
var_dump($num);


?>
    
</body>
</html>