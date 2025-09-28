<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>

    </h3>

    <?php

    // Задание 1:
    echo "<h1>Задание 1</h1>";
    class Category
    {
        // Используем свойства public, т.е обращаемся напрямую.
        public $name;
        public $list_products;

        public function __construct($name, $list_products = [])
        {
            $this->name = $name;
            $this->list_products = $list_products;
        }
    }

    $category = new Category("Автомобили", ["Lada Vesta", "Renault Logan 2", "Mercedes-Benz S-класс "]);

    echo "Категория: " . $category->name . "<br>";
    echo "Продукты: " . implode(", ", $category->list_products);


    ?>
</body>

</html>