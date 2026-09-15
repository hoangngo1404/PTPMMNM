<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<th>Bảng $i</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($j = 1; $j <= 10; $j++) {
                    echo "<tr>";
                    for ($i = 1; $i <= 10; $i++) {
                        $result = $i * $j;
                        echo "<td>{$i} &times; {$j} = {$result}</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>