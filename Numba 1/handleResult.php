<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submitBtn'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            $result = $b**2 -4*$a*$c;

            echo $result;
        }
    ?>
</body>
</html>

