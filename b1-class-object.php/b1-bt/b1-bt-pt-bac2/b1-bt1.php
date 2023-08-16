
<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function getC() {
        return $this->c;
    }

    public function getDiscriminant() {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1() {
        $delta = $this->getDiscriminant();
        if ($delta >= 0) {
            return (-$this->b + sqrt($delta)) / (2 * $this->a);
        } else {
            return 0;
        }
    }

    public function getRoot2() {
        $delta = $this->getDiscriminant();
        if ($delta >= 0) {
            return (-$this->b - sqrt($delta)) / (2 * $this->a);
        } else {
            return 0;
        }
    }

    public function enter() {
        $delta = $this->getDiscriminant();

        if ($delta > 0) {
            $x1 = $this->getRoot1();
            $x2 = $this->getRoot2();
            echo "Phương trình có hai nghiệm: <br>x1 = " . $x1 . "<br>x2 = " . $x2;
        } elseif ($delta == 0) {
            $x = -$this->b / (2 * $this->a);
            echo "Pt có nghiệm kép(do 2 nghiệm bằng nhau):<br>x = " . $x;
        } else {
            echo  "PTVN";
        }
    }
}

