<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In số chẵn ngẫu nhiên</title>
</head>
<body>
    <?php 
    $N = rand(1, 100);
    echo "N = $N <br>";
    echo "Các số chẵn từ 1 đến $N là: ";
    for ($i = 1; $i <= $N; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }
    ?>
</body>
</html>