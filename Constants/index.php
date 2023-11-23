<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Constants</title>
</head>
<body>

<?php

const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5

 ?>
</body>
</html>