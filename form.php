<?php
    // echo '<pre/>';
    // print_r($_POST);

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];

    echo $first_name.' '.$last_name ;



?>



<form action="#" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" placeholder="Your First name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" placeholder="Your Last name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
        // echo '<br/><br/>';
        echo "<h3>If Statement</h3>";
        $x=5; $y=3; $z=5;

        if ($x==$y || $x==$z){
            echo "Statement is True";
        }else{
            echo 'Statemetn is false';
        }
?>