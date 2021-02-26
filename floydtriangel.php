<html>
<body>
<h1>
floyd triangle
</h1>
<?php
echo "<pre>";
$num = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . "&nbsp;";
        $num++;
        if ($j == $i) {
            echo "&nbsp;";
            echo "<br/>";
        }
    }
}
echo "</pre>";
?>
</body>
</html>
