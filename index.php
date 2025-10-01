<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тема: ООП. Часть 2</title>
</head>

<body>


<?php
// Задание 1

class Product
{
    protected $name;
    protected $price;
    protected $description;
    protected $brand;

    public function __construct($name, $price, $description, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
    }


    public function getProduct()
    {
        return "Name: {$this->name}, Price: {$this->price}, Description: {$this->description}, Brand: {$this->brand}";
    }
}
echo "<h3>Задание 1</h3>";
$product1 = new Product("-", "-", "", "-");
echo $product1->getProduct();
echo "<hr>";




// Задание 2

class Phone extends Product
{
    private $cpu;
    private $ram;
    private $countSim;
    private $hdd;
    private $os;

    public function __construct($name, $price, $description, $brand, $cpu, $ram, $countSim, $hdd, $os)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->countSim = $countSim;
        $this->hdd = $hdd;
        $this->os = $os;
    }


    public function getProduct()
    {
        return parent::getProduct() .
            ", CPU: {$this->cpu}, RAM: {$this->ram}, Count SIM: {$this->countSim}, HDD: {$this->hdd}, OS: {$this->os}";
    }
}


echo "<h3>Задание 2</h3>";
$phone1 = new Phone("iPhone 7", "$1000", "Phone", "Apple", "A9", "1Gb", 1, "128Gb", "IOS");
echo $phone1->getProduct();
echo "<hr>";




// Задание 3

class Monitor extends Product
{
    private $diagonal;
    private $frequency;
    private $ports;

    public function __construct($name, $price, $description, $brand, $diagonal, $frequency, $ports)
    {
        parent::__construct($name, $price, $description, $brand);
        $this->diagonal = $diagonal;
        $this->frequency = $frequency;
        $this->ports = $ports;
    }


    public function getProduct()
    {
        return parent::getProduct() .
            ", Diagonal: {$this->diagonal}, Frequency: {$this->frequency}, Ports: {$this->ports}";
    }
}

echo "<h3>Задание 3</h3>";
$monitor1 = new Monitor("S24E650", "$100", "Monitor", "Samsung", "21'", "60Hz", "VGA, HDMI");
echo $monitor1->getProduct();
echo "<hr>";




// Задание 4

echo "<h3>Задание 4</h3>";
echo $product1->getProduct();
echo "<hr>";




// Задание 5

echo "<h3>Задание 5</h3>";
echo $phone1->getProduct();
echo "<br>";
echo $monitor1->getProduct();
echo "<hr>";




// Задание 6

$products = [];
$products[] = new Phone("iPhone 7", "$1000", "Phone", "Apple", "A9", "1Gb", 1, "128Gb", "IOS");
$products[] = new Phone("Galaxy S10", "$1000", "Phone", "Samsung", "Snapdragon 860", "3Gb", 1, "128Gb", "Android");
$products[] = new Phone("Lumia 720", "$350", "Phone", "Nokia", "Snapdragon 300", "500Mb", 1, "32Gb", "Windows Phone");
$products[] = new Monitor("S24E650", "$100", "Monitor", "Samsung", "21'", "60Hz", "VGA, HDMI, DisplayPort");
$products[] = new Monitor("Apple Cinema Display", "$10000", "Monitor", "Apple", "24'", "144Hz", "HDMI, DisplayPort");

echo "<h3>Задание 6</h3>";
echo "массив products с 5 объектами создан .";
echo "<hr>";




// Задание 7

echo "<h3>Задание 7</h3>";
foreach ($products as $p) {
    echo "<p>" . $p->getProduct() . "</p>";
}
?>

</body>

</html>