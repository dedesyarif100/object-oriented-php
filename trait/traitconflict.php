<?php
trait A {
    public function doA()
    {
        echo "A";
    }

    public function doB()
    {
        echo "B";
    }
}

trait B {
    public function doA()
    {
        echo "A";
    }

    public function doB()
    {
        echo "B";
    }
}

class Sample 
{
    use A;
    use B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB(); 