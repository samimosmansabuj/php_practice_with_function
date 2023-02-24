<?php
    // echo '<pre/>';
    // print_r($_POST);

    if(isset($_POST['btn'])){
        $starting_number=$_POST['starting_number'];
        $ending_number=$_POST['ending_number'];
        $result='';
    if ($starting_number<$ending_number) {
        for ($i=$starting_number; $i<=$ending_number; $i++) { 
            $result.=$i.' ';
        }
    }else{
        for ($i=$starting_number; $i>=$ending_number; $i--) { 
            $result.=$i.' ';
        }
    }
}
?>
<form action="#" method="post">
<table>
    <tr>
        <td>Starting Number</td>
        <td><input type="number" name="starting_number" value="<?php if(isset($_POST['btn'])){echo $starting_number;} ?>"></td>
    </tr>
    <tr>
        <td>Ending Number</td>
        <td><input type="number" name="ending_number" value="<?php if(isset($_POST['btn'])){echo $ending_number;} ?>"></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><textarea name="result" cols="30" rows="5"><?php if(isset($_POST['btn'])){echo $result;} ?></textarea></tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
</table>
</form>
