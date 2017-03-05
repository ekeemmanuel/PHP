<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    echo "Hello World!" . "<br>";
    echo "Hello" . " " . "World" . "!";
    ?>
</p>
<p>
    <?php
    echo 5 * 7;
    ?>
</p>
<?php
$name = "Frodo Baggins";
$age = "111";
echo "My name is" . " " . $name . " " . "and I am" . " " . $age . " " . "years old";
?>
<p>
    <?php
    echo "I get printed!";
    //I don't! I'm a comment.

    /*I don't get printed either
    and neither do I.*/
    ?>
</p>
<?php
$name = "Edgar";

if ($name == "Simon") {
    print "I know you!";
} else {
    print "Who are you?";
}
?>
<p>
    <?php
    $myage = "22";

    if ($myage > "16" && $myage <= "18") {
        print "Age" . " " . $myage . " " . "is only allowed to buy specs";
    }
    if ($myage > "18" && $myage <= "21") {
        print "Age" . " " . $myage . " " . " is only allowed to buy mugs";
    }
    if ($myage > "21") {
        print "Age" . " " . $myage . " " . "is only allowed to buy sausage rolls";
    }
    ?>
</p>
<?php
$numberOfHobbits = "3";

switch ($numberOfHobbits) {
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
    $wantedgood = "specs";

    if ($wantedgood = "specs") {
        print "You have to be 16 to buy specs." . " ";
    }
    if ($wantedgood = "mugs") {
        print "You have to be 18 to buy mugs." . " ";
    }
    if ($wantedgood = "sausage rolls") {
        print "You have to be 21 to buy sausage rolls. ";
    }
    ?>
</p>
<?php
$myArray = array("do", "re", "mi"); //declare the array

echo $myArray[0];//outputs "do"
$myArray[1] = "la";//modifies position 1 (re)
echo $myArray[1];//outputs "la"
unset($myArray[2]);//removes the array in position 2
?>
<p>
    <?php
    $provisionedActivities = array("specs", "mugs", "sausage rolls");

    print "<p>$provisionedActivities[0]</p>";
    $provisionedActivities[1] = "hugs";
    print "<p>$provisionedActivities[1]</p>";
    unset($provisionedActivities[2]);
    print null;
    ?>
</p>
</body>
</html>
