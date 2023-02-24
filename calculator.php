<?php
    echo '<pre/>';
    print_r($_POST);

    if(isset($_POST['btn'])){

    $first_number=$_POST['first_number'];
    $last_number=$_POST['last_number'];
    $btn=$_POST['btn'];

    if ($btn=="+") {
        $result=$first_number+$last_number;
    }elseif($btn=="-"){
        $result=$first_number-$last_number;
    }elseif($btn=="*"){
        $result=$first_number*$last_number;
    }elseif($btn=="/"){
        $result=$first_number/$last_number;
    }
    elseif($btn=="%"){
        $result=$first_number%$last_number;
    }

    echo $result;
    echo '<br/>';
    echo gettype($result);

}





?>



<form action="#" method="post">
<table>
    <tr>
        <td>First Number</td>
        <td><input type="number" name="first_number" value="<?php if(isset($_POST['btn'])){echo $first_number;} ?>"></td>
    </tr>
    <tr>
        <td>Last Number</td>
        <td><input type="number" name="last_number" value="<?php if(isset($_POST['btn'])){echo $last_number;} ?>"></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><input type="number" name="result" value="<?php if(isset($_POST['btn'])){echo $result;} ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="btn" value="+">
            <input type="submit" name="btn" value="-">
            <input type="submit" name="btn" value="*">
            <input type="submit" name="btn" value="/">
            <input type="submit" name="btn" value="%">
        </td>
    </tr>
</table>
</form>
