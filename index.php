<?
class Animal
{
    protected $weight;
    protected $age;
    protected $color;

    public function __construct($weight, $age, $color)
    {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Lion extends Animal
{
    private $unique = 'пышная грива';

    public function roar()
    {
        echo "Лев рычит";
    }

    public function getUnique()
    {
        return $this->unique;
    }

    public function __toString()
    {
        return sprintf('Этот лев весит %s кг, ему %s лет, он имеет окрас %s и у него есть %s <br>', $this->getWeight(), $this->getAge(), $this->getColor(), $this->getUnique());
    }
}

class Rabbit extends Animal
{
    private $unique = 'короткий хвост';

    public function eat()
    {
        echo "Зайчик грызет морковку";
    }

    public function getUnique()
    {
        return $this->unique;
    }

    public function __toString()
    {
        return sprintf('Этот заяц весит %s кг, ему %s лет, он имеет окрас %s и у него есть %s <br>', $this->getWeight(), $this->getAge(), $this->getColor(), $this->getUnique());
    }
}

class Wolf extends Animal
{
    private $unique = 'острые уши';

    public function run()
    {
        echo "Волк воет на луну";
    }

    public function getUnique()
    {
        return $this->unique;
    }

    public function __toString()
    {
        return sprintf('Этот волк весит %s кг, ему %s лет, он имеет окрас %s и у него есть %s <br>', $this->getWeight(), $this->getAge(), $this->getColor(), $this->getUnique());
    }
}

$lion = new Lion(185, 13, 'рыжий');
$rabbit = new Rabbit(3, 5, 'серый');
$wolf = new Wolf(66, 11, 'черный');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="info">
        <div class="obj">
            <h2>Объект 1</h2>
            <p><?= $lion ?></p>
            <p><? $lion->roar(); ?></p>
        </div>
        <div class="obj">
            <h2>Объект 2</h2>
            <p><?= $rabbit ?></p>
            <p><? $rabbit->eat(); ?></p>
        </div>
        <div class="obj">
            <h2>Объект 3</h2>
            <p><?= $wolf ?></p>
            <p><? $wolf->run(); ?></p>
        </div>
    </div>
</body>

</html>