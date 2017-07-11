<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Odd numbers from N to 1</title>
</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num']))
{
    $numbers = intval($_GET['num']);

    for ($i = $numbers; $i > 0; $i--)
    {
        if ($i % 2 == 1)
        {
            echo $i. " ";
        }

    }
}
?>
</body>
</html>
