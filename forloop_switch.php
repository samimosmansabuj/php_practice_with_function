<?php
    echo '<h2>For Loop Practice</h2>';
    echo 'for loop - (1-20) porjnto sob number';
    echo "<br/>";
    for ($i=1; $i<=20 ; $i++) { 
        echo $i.' ';
    }
    echo "<br/>";echo "<br/>";echo "<br/>";
    echo 'for loop - (1-20) porjnto sob jor shongkha';
    echo '<br/>';
    
    for ($i=1; $i<=10 ; $i++) { 
        if ($i%2==0) {
            echo $i.' ';
        }
    }
    echo "<br/>";echo "<br/>";echo "<br/>";
    echo 'for loop - (1-20) porjnto sob bijor shongkha';
    echo '<br/>';
    
    for ($i=1; $i<=10 ; $i++) { 
        if ($i%2!=0) {
            echo $i.' ';
        }
    }
    echo '<br/><br/><br/>';
    echo '<h2>Switch Practice</h2>';
    $your_code=243;
    switch ($your_code) {
        case '245':
            echo "Your Code Number is 245";
            break;
        case '244':
            echo "Your Code Number is 244";
            break;
        case '243':
            echo "Your Code Number is 243";
            break;
        
        default:
            echo "Your code number not found at the momemnt!";
            break;
    }




?>




