<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sub-Lists</title>
</head>

<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit"/>
</form>
<ul>
<?php
if (isset($_GET['num']) && isset($_GET['num2']))
{
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);

 for ($i = 1; $i <= $num1; $i++)
        {
            echo "<li>";
            echo "List $i\n";
            echo "\t\t<ul>\n";

            for ($j = 1; $j <= $num2; $j++)
            {
                echo "\t\t\t<li>";
                echo "Element $i.$j";
                echo "</li>\n";
            }
            echo "\t\t</ul>\n";
            echo "\t</li>\n";
        }

}

?>
</ul>
</body>
</html>







