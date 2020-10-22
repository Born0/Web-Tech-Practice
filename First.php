<!DOCTYPE html>
<html lang="en">
    <head></head><br><br>
<body>

</body>
</html>

<?php
class MyCircle
{
    private $radius;
    function MyCircle($radius)
    {
       $this->radius=$radius;
       echo "Initialize<br><br>";
    }
    function __destruct(){
        echo "<br><br>Destroy";
    }
    function setRadius($radius)
    {
        $this->radius=$radius;
    }

    function getRadius()
    {
        return $this->radius;
    }
    function getArea()
    {
        $area=(3.1416*$this->radius*$this->radius);
        return $area;
    }
}

    $circle = new MyCircle(3);
    echo "Radius from Constructor: ";
    echo $circle->getRadius();
    $circle->setRadius(5);
    echo "<br>Radius after set: ";
    echo $circle->getRadius();
    echo "<br>Area: ";
    echo $circle->getArea();
?>