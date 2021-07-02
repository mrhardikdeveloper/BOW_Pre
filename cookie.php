<?php

//setcookie(name, value, expire, path, domain, secure, httponly)

setcookie("cname","cvalue", time()+(86400*60),"/");

if(isset($_COOKIE['cname']))
{
    echo "Cookie Create...".$_COOKIE['cname'];
}
else
{
    echo "Cookie Not Create...";
}
?>

<form method="get">
    <input type="submit" name="sb" value="Click">
</form>

<?php

if(isset($_GET['sb']))
{
    //unset($_COOKIE['cname']);
    setcookie('cname', null, -1, '/');   
}

?>