<?php
session_start();


if (isset($_POST['clear_all'])) {
    session_destroy();
    session_start();
    $_SESSION['categories'] = [];
    $_SESSION['products'] = [];
}


if (!isset($_SESSION['categories'])) {
    $_SESSION['categories'] = [];
}
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}


if (isset($_POST['padd'])) {
    $name = trim($_POST['pName'] ?? '');
    $price = trim($_POST['pPrice'] ?? '');

    if ($name != "" && $price != "") {
        $_SESSION['products'][] = ["name" => $name, "price" => $price];
    }
}


if (isset($_POST['cadd'])) {
    $catName = trim($_POST['catName'] ?? '');
    if ($catName != "") {
        
        $_SESSION['categories'][$catName] = $_SESSION['products'];
        
        $_SESSION['products'] = [];
    }
}


function findCategory($categories, $name)
{
    foreach ($categories as $catName => $products) {
        if (strtolower($catName) === strtolower($name)) {
            return [$catName, $products];
        }
    }
    return null;
}


$foundCategory = null;
if (isset($_POST['search'])) {
    $searchName = trim($_POST['searchName'] ?? '');
    if ($searchName != "") {
        $foundCategory = findCategory($_SESSION['categories'], $searchName);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Категории и продукты</title>
    <style>
        .clear-btn {
            background-color: #ff4444;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin: 10px 0;
        }

        .clear-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>

    <form method="post">
        <input type="submit" name="clear_all" value="Очистить всё" class="clear-btn"
            onclick="return confirm('Вы уверены, что хотите очистить все данные?')">
    </form>


    <form method="post">
        <table>

            <tr>
                <td><input type="text" name="pName" placeholder="Name"></td>
                <td><input type="text" name="pPrice" placeholder="Price"></td>
                <td><input type="submit" value="Add" name="padd"></td>
            </tr>
        </table>
    </form>

    <?php
    if (!empty($_SESSION['products'])) {
        foreach ($_SESSION['products'] as $product) {
            echo $product['name'] . " — " . $product['price'] . "<br>";
        }
    } else {
        echo "Нет продуктов<br>";
    }
    ?>

    <hr>


    <form method="post">
        <input type="text" name="searchName" placeholder="Search">
        <input type="submit" value="Search" name="search">
    </form>


    <h3>Categories</h3>
    <form method="post">
        <input type="text" name="catName" placeholder="Name">
        <input type="submit" value="Add" name="cadd">
    </form>


    <?php
    if (!empty($_SESSION['categories'])) {
        foreach ($_SESSION['categories'] as $catName => $products) {
            echo "<h4>$catName</h4>";
            if (!empty($products)) {
                foreach ($products as $product) {
                    if (is_array($product) && isset($product['name']) && isset($product['price'])) {
                        echo $product['name'] . " — " . $product['price'] . "<br>";
                    }
                }
            } else {
                echo "(нет продуктов)<br>";
            }
        }
    } else {
        echo "Нет категорий<br>";
    }
    ?>


    <?php
    if ($foundCategory !== null) {
        echo "<hr><h3>Результат поиска:</h3>";
        echo "<b>{$foundCategory[0]}</b><br>";
        if (is_array($foundCategory[1]) && !empty($foundCategory[1])) {
            foreach ($foundCategory[1] as $product) {
                if (is_array($product) && isset($product['name']) && isset($product['price'])) {
                    echo $product['name'] . " — " . $product['price'] . "<br>";
                }
            }
        } else {
            echo "(нет продуктов)<br>";
        }
    } elseif (isset($_POST['search'])) {
        echo "<hr><h3>Результат поиска:</h3> Категория не найдена.";
    }
    ?>

</body>

</html>