<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Of 3 Numbers </title>
</head>
<body>

<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    K: <input type="text" name="num3" />
    <input type="submit" />
</form>
<?php

$negativesCount = 0;
if (isset($_GET['num2']) && isset($_GET['num1']) && isset($_GET['num3']))
{
    $firstNum = intval($_GET['num1']);
    $secondNum = intval($_GET['num2']);
    $thirdNum = intval($_GET['num3']);

    $numbers = array($firstNum, $secondNum, $thirdNum);

    foreach ($numbers as $num)
    {
        if ($num < 0)
        {
            $negativesCount++;
        }

    }

    if ($negativesCount % 2 == 0)
        {
            echo "Positive";
        }
    else
        {
            echo "Negative";
        }

}


?>

</body>
</html>