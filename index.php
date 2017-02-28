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
    $elf = "Frodo Baggins";
    $age = "111";
    echo "My name is". $elf . "am I am" . $age;
    ?>
<p>
    <?php
    echo "I get printed!";
    //I don't I'm a comment.

    /*I don't get printed either
    and neither do I.*/
    ?>
<p>
    <?php
    $name="Edgar";

    if ($name=="Simon"){
        print "I know you";
    }
    else{
        print "Who are you?";
    }
    ?>
</p>
</body>
</html>
