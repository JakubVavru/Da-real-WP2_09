<?php
 require_once('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($i=0; $i < rand(1, 10); $i++) { 
    drawMonster(rand(1, 3), rand(100, 500));
}
?> 
</body>
</html>