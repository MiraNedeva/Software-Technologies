<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers from N to 1</title>
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
        echo $i. " ";
    }
}
?>
</body>
</html>