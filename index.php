<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    echo "Hello World!";
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
echo "My name is" . " " . $hobbit . "and I am" . $age;
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
    $name = "Edgar";

    if ($name == "Simon") {
        print "I know you";
    } else {
        print "Who are you?";
    }
    ?>
</p>
<p>
    <?php
    $val = "18";

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
    $numberHobbits=2;

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
</p>
</body>
</html>
