<?php
    echo "<pre/>";
    print_r($_POST);

    require_once('function_defination.php');
    $result=string_fount($_POST);
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter Yur Text</td>
            <td><input type="text" name="given_text"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" name="result" value="<?php if(isset($_POST['btn'])){echo $result;} ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>