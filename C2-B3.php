<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1. Hàm kiểm tra số nguyên tố
    function isPrime($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    // 2. Hàm kiểm tra số chính phương
    function isPerfectSquare($num) {
        if ($num < 0) return false;
        $sq = sqrt($num);
        return ($sq == floor($sq));
    }

    // 3. Sinh số ngẫu nhiên N trong đoạn [-100; 100]
    $N = rand(-100, 100);

    echo "<h2>Số ngẫu nhiên sinh ra: <span class='badge'>$N</span></h2>";

    // 4. Kiểm tra N có là số dương không ($N > 0)
    if ($N > 0) {
        echo "<p>$N là số dương.</p>";
        echo "<p>Kết quả kiểm tra:</p>";

        // I. In các ước số của N
        $divisors = [];
        for ($i = 1; $i <= $N; $i++) {
            if ($N % $i == 0) {
                $divisors[] = $i;
            }
        }
        echo "<div class='result-item'>I. Các ước số của $N: " . implode(", ", $divisors) . "</div>";

        // II. Kiểm tra N có phải số nguyên tố không
        if (isPrime($N)) {
            echo "<div class='result-item'>II. Kiểm tra số nguyên tố: $N là số nguyên tố.</div>";
        } else {
            echo "<div class='result-item'>II. Kiểm tra số nguyên tố: $N không phải là số nguyên tố.</div>";
        }

        // III. Tính tổng các số nguyên tố < N
        $sumPrimes = 0;
        $primesList = [];
        for ($i = 2; $i < $N; $i++) {
            if (isPrime($i)) {
                $sumPrimes += $i;
                $primesList[] = $i;
            }
        }
        $detail = !empty($primesList) ? " (" . implode(" + ", $primesList) . ")" : "";
        echo "<div class='result-item'>III. Tổng các số nguyên tố &lt; $N: $sumPrimes $detail</div>";

        // IV. Kiểm tra N có là số chính phương không
        if (isPerfectSquare($N)) {
            echo "<div class='result-item'>IV. Kiểm tra số chính phương: $N là số chính phương.</div>";
        } else {
            echo "<div class='result-item'>IV. Kiểm tra số chính phương: $N không phải là số chính phương.</div>";
        }

    } else {
        echo "<div class='alert-error'>Kết quả: N = $N không phải là số dương (N &le; 0).</div>";
    }
    ?>
</body>
</html>