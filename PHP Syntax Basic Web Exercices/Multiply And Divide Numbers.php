<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiply and divide numbers </title>
</head>
<body>

<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form>
<?php
 if (isset($_GET['num2']) && isset($_GET['num1']))
{
    $n = intval($_GET['num1']);
    $m = intval($_GET['num2']);
    if ($m >= $n)
    {
        echo $m * $n;
    }
    else
    {
        echo  $n / $m;
    }
}


?>

</body>
</html>