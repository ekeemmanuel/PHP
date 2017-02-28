<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php
    echo "Hello World!". "<br>";
    echo "Hello" . " " . "World" . "!";
    ?>
</p>
<p>
    <?php
    echo 5 * 7;
    ?>
</p>
<?php
$hobbit = "Frodo Baggins";
$age = "111";
echo "My name is"." ". " " . $hobbit . "and I am"." ". $age;
?>
<p>
    <?php
    echo "I get printed!";
    //I don't I'm a comment.

    /*I don't get printed either
    and neither do I.*/
    ?>
</p>
<p>
    <?php
    $name = "Simon";

    if ($name == "Simon") {
        print "I know you";
    } else {
        print "Who are you?";
    }
    ?>
</p>
<p>
    <?php
    $val = "19";

    if ($val < "18") {
        print "buy specs";
    }
    if ($val == "18") {
        print "buy mugs";
    }
    if ($val > "18")
    {print "buy sausage rolls";
    }
    ?>

</p>
<p>
    <?php
    $numberHobbits="3";

    switch($numberHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }
    ?>
<p>
    <?php
    $myArray=array("do","re","mi"); //declare the array

    echo $myArray[0];//outputs "do"
    $myArray[1]= "la";//modifies position 1 (re)
    echo $myArray[1];//outputs "la"
    unset($myArray[2]);//removes the array in position 2
    ?>
</p>
</body>
</html>
