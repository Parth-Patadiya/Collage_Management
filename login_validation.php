<?php
$id = $_POST['unm'];
$pw = $_POST['pw'];

session_start();
$_SESSION["id"] = $id;

if($id=="admin" && $pw=="admin")   
{
    header("Location: index.php");
}
else
    {
        echo "<script> alert('Please Check Username Or Password ...');</script>";
        echo "<script> window.location.href = 'signin.php'</script>";

    }
?>