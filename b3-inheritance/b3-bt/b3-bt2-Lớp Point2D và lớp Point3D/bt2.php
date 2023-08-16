<?php
class Point2D
{
    public float $x;
    public float $y;
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }

    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        return
            [
                $this->x,
                $this->y
            ];
    }
    public function __toString()
    {
        return "Point2D [ x = {$this->x}, y = {$this->y} ];";
    }
}
class Point3D extends Point2D
{
    public $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ()
    {
        return
            [
                $this->x,
                $this->y,
                $this->z
            ];
    }
    public function __toString()
    {
        return          "Point3D [ x = {$this->x}, y = {$this->y}, z = {$this->z}  ]";
    }
}
$point2d = new Point2D(1, 2);
echo $point2d;
echo "<br>";
$point3d = new Point3D(3, 4, 5);
echo $point3d;
