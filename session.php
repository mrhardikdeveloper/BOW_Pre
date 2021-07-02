<?php 
session_start();
?>

<form method="post">
    <input type="submit" name="cs" value="Create">
</form>

<?php
if(isset($_POST['cs']))
{
    $_SESSION['sname'] = "Session Name";
    echo "<script language='javascript'>alert('Create...');</script>";
}
?>

<form method="post">
    <input type="submit" name="ds" value="Distroy">
</form>

<?php
if(isset($_POST['ds']))
{
    session_unset();
    session_destroy();
    echo "<script language='javascript'>alert('Distroy...');</script>";
}

echo $_SESSION['sname'];
?>

