<?php
    // echo "<pre/>";
    // print_r($_POST);
    if (isset($_POST['btn'])) {
        $given_length=$_POST['given_length'];
        require_once('function_defination.php');
        $password=make_password($_POST); 
    }
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter Your Password length</td>
            <td><input type="text" name="given_length" value="<?php if(isset($_POST['btn'])){echo $given_length;} ?>"></td>
        </tr>
        <tr>
            <td>Your Password is: </td>
            <td><input type="text" name="result" value="<?php if(isset($_POST['btn'])){echo $password;} ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>