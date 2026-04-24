<?php
// print_r($_POST);
$name = $_POST['name'];
$tmarks = $_POST['tmarks'];
$omarks = $_POST['omarks'];

$percentage = ($omarks / $tmarks)*100;
$per = round($percentage,2);
// echo $per;

$is_grade;






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome <?php echo $name?></h1>

<div class="container">
    <div class="scontainer">
        <?php echo $tmarks?>
    </div>
    <div class="scontainer">
        <?php echo $omarks?>
    </div>
</div>
<div class="container">
    <div class="scontainer">
        <?php echo $per ?>
    </div>
    <div class="scontainer">
        <?php 
            if($per >= 90){
                echo "A1";
                $is_grade = TRUE;
            }elseif($per >= 80){
                echo "A+";
                $is_grade = TRUE;
            }elseif($per >= 70){
                echo "A";
                $is_grade = TRUE;
            }elseif($per >= 60){
                echo "B";
                $is_grade = TRUE;
            }elseif($per >= 50){
                echo "C";
                $is_grade = TRUE;
            }else{
                echo "Better Luck, Next time!";
                $is_grade = FALSE;
            }
        ?>
    </div>
</div>
<div class="container">
    <div class="scontainer">
        <?php
            if($is_grade == TRUE){
                echo "Pass";
            }else{
                echo "Fail";
            }
        ?>
    </div>
    
</div>
    
</body>
</html>