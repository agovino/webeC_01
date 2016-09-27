<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$list = [343,34,323,23,54,255,666];
echo max($list);   // 666
echo "<br>";
echo min($list);  // 23
echo "<br>";

sort($list);

echo print_r($list);
?>
</body>
</html>