<?php  
    $a=10;
    $b=20;

    echo $a++.'<br/>';
    echo $a;
    echo '<br/><hr/>';

    echo $b--.'<br>';
    echo $b.'<br/><hr/>';

    echo "<h1>PHP Operator</h1>";
    $number_1st=2;  $number_2nd=10;
    // echo -$number_2nd,'<br/>';
    // echo $number_2nd.'<br/>';

    // echo $number_1st+=$number_2nd;
    // echo "<br/>";
    // echo $number_1st;
    // echo "<br/>";
    // echo $number_1st-=$number_2nd;
    // echo "<br/>";
    // echo $number_1st;

    echo $number_1st.$number_2nd;
    echo "<br/>";
    echo $number_1st;
    echo "<br/>";
    echo $number_1st.=$number_2nd;
    echo "<br/>";
    echo $number_1st;

    // echo $number_1st!==$number_2nd;
    // echo "<br/>";
    // echo $number_1st.' '.$number_2nd;
    echo "<br/><br/>";

    echo "<h3>Statement-----------</h3>";

    $a=3;
    $b=5;
    $c=10;

    if($a>$b){
        echo "a greater than b";
    }else{
        echo "b greater than a";
    }

    echo "<br/>";
    echo "<br/>";
    echo "Judi a=3, b=5, c=10";
    echo "<br/>";

    if ($a>$b) {
        echo 'its true';
    }elseif ($a>$c){
        echo 'its true';
    }else{
        echo 'this statement is false';
    }








?>