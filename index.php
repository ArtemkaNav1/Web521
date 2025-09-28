<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Задание 1: 

    echo "<h2> Задание 1 <h2>";
    function generateRandomArray($count_elem, $min_val, $max_val)
    {

        if ($min_val > $max_val) {
            $temp = $min_val;
            $min_val = $max_val;
            $max_val = $temp;
        }
        $result = array();
        for ($i = 0; $i < $count_elem; $i++) {
            $result[] = rand($min_val, $max_val);
        }

        return $result;
    }

    $count = 6;
    $min = 3;
    $max = 10;

    $randomArray = generateRandomArray($count, $min, $max);

    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    echo "<h2>Count: $count</h2>";
    echo "<h3>Min: $min</h3>";
    echo "<h3>Max: $max</h3>";
    echo "<h2>Output: " . implode(', ', $randomArray) . "</h2>";
    echo "</body>";
    echo "</html>";

    // Задание 2:

    echo "<h2> Задание 2<h2>";
    function power($base, $exponent)
    {
        return pow($base, $exponent);
    }

    $base = 5;
    $exponent = 12;
    $result = power($base, $exponent);

    echo "" . $base . "^" . $exponent . " = " . $result . " ";
    ?>

</body>

</html>