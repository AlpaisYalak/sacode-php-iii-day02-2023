<?php 
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My Car is a " . $this->color . " ". $this->model . "!";
    }

    
}
$myCar = new  Car('Blue','Avanza');
echo $myCar->message();

$myCar = new  Car('Merah','BMW');
echo $myCar->message();

?>