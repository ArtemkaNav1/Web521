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
    
    echo "<h1> Задание 1 <h1>";
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
    
    echo "<h1> Задание 2<h1>";
    function power($base, $exponent)
    {
        return pow($base, $exponent);
    }

    $base = 5;
    $exponent = 12;
    $result = power($base, $exponent);

    echo "" . $base . "^" . $exponent . " = " . $result . " ";


    // Задание 3:
    
    echo "<h1> Задание 3<h1>";
    function swap(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $first = 3;
    $second = 13;

    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    echo "<h1>First: $first; Second: $second</h1>";

    // Меняем местами
    swap($first, $second);

    echo "<h1>First: $first; Second: $second</h1>";
    echo "</body>";
    echo "</html>";

    // Задание 4:
    
    echo "<h1> Задание 4<h1>";

    function calculateExpression($expression)
    {
        $expression = str_replace(' ', '', $expression);

        preg_match_all('/(\d+|[+\-*\/])/', $expression, $matches);
        $tokens = $matches[0];

        $result = [];
        $i = 0;
        $count = count($tokens);

        while ($i < $count) {
            if (isset($tokens[$i + 1]) && in_array($tokens[$i + 1], ['*', '/'])) {
                $left = (float) $tokens[$i];
                $operator = $tokens[$i + 1];
                $right = (float) $tokens[$i + 2];

                if ($operator == '*') {
                    $result[] = $left * $right;
                } else if ($operator == '/') {
                    if ($right == 0) {
                        return "Ошибка: деление на ноль";
                    }
                    $result[] = $left / $right;
                }

                $i += 3;
            } else {
                $result[] = $tokens[$i];
                $i++;
            }
        }

        $finalResult = (float) $result[0];
        $countResult = count($result);

        for ($i = 1; $i < $countResult; $i += 2) {
            if (isset($result[$i]) && isset($result[$i + 1])) {
                $operator = $result[$i];
                $number = (float) $result[$i + 1];

                if ($operator == '+') {
                    $finalResult += $number;
                } else if ($operator == '-') {
                    $finalResult -= $number;
                }
            }
        }

        return $finalResult;
    }

    $expression = "3+8*9-2*3";
    $result = calculateExpression($expression);

    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    echo "<h1>$expression=$result</h1>";
    echo "</body>";
    echo "</html>";

    // Задание 5:
    
    echo "<h1> Задание 5<h1>";



    function calculateSimple($expr)
    {
        preg_match_all('/(\d+|[+\-*\/])/', $expr, $matches);
        $tokens = $matches[0];

        for ($i = 0; $i < count($tokens); $i++) {
            if ($tokens[$i] == '*' || $tokens[$i] == '/') {
                $a = (float) $tokens[$i - 1];
                $b = (float) $tokens[$i + 1];

                if ($tokens[$i] == '*') {
                    $result = $a * $b;
                } else {
                    if ($b == 0)
                        return "Error: division by zero";
                    $result = $a / $b;
                }

                array_splice($tokens, $i - 1, 3, [$result]);
                $i--;
            }
        }

        $result = (float) $tokens[0];
        for ($i = 1; $i < count($tokens); $i += 2) {
            if ($tokens[$i] == '+') {
                $result += (float) $tokens[$i + 1];
            } else if ($tokens[$i] == '-') {
                $result -= (float) $tokens[$i + 1];
            }
        }

        return $result;
    }

    function calculateExpressionWithBrackets($expression)
    {
        $expression = str_replace(' ', '', $expression);

        
        while (preg_match('/\(([^()]+)\)/', $expression, $match)) {
            $inner = calculateSimple($match[1]);
            $expression = str_replace($match[0], $inner, $expression);
        }

        return calculateSimple($expression);
    }

    $expression = "(23+8)*(9-231*32)";
    $result = calculateExpressionWithBrackets($expression);

    echo "<html>";
    echo "<head></head>";
    echo "<body>";
    echo "<h1>$expression=$result</h1>";
    echo "</body>";
    echo "</html>";
    ?>

</body>

</html>