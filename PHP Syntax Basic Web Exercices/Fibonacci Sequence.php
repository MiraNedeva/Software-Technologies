<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci Sequence</title>
</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num']))
{

    $num = intval($_GET['num']);

       if ($num == 1)
       {
           echo 1;
       }
       elseif ($num == 2)
       {
           echo 1 . " " . 1 . " ";
       }
       else
       {
           echo 1 . " " . 1 . " ";

           $a = 1;
           $b = 1;

           for ($i = 2; $i <$num; $i++)
           {
               $c = $a + $b;
               $a = $b;
               $b = $c;
                echo $c . " ";
           }
       }
}
?>
</body>
</html>