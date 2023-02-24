<?php
    // echo '<pre/>';
    // print_r($_POST);

    if(isset($_POST['btn'])){

        require_once('function_defination.php');

        $rdata=word_character_count($_POST);
        // echo $rdata['number_of_word'];
        // echo '<br/>';
        // echo $rdata['number_of_character'];
    }
?>
<form action="#" method="post">
<table>
    <tr>
        <td>Enter Your String</td>
        <td><textarea name="given_text"cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
        <td>Total Number of Word</td>
        <td><input type="number" value="<?php if(isset($_POST['btn'])){echo $rdata['number_of_word'];} ?>"></td>
    </tr>
    <tr>
        <td>Total Number of Character</td>
        <td><input type="number" value="<?php if(isset($_POST['btn'])){echo $rdata['number_of_character'];} ?>"></tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
</table>
</form>
