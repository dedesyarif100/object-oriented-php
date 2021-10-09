<?php
class shape {
    public $num = 12311;
    public $name = "HELLO WORLD";

    // construct dijalankan pada saat pertama kali class dijalankan;
    public function __construct(int $num, string $name)
    {
        echo "INI CONSTRUCT DARI CLASS SHAPE <br>";
        $this->num = $num;
        $this->name = $name;
    }

    public function getNum(): int {
        return $this->num;
    }

    public function getName(): string {
        return $this->name;
    }

    // destruct dijalankan pada terakhir kali setelah semua function telah dijalankan;
    public function __destruct() 
    {
        echo "<br> INI DESTRUCT DARI CLASS SHAPE";
    }
}

class retangle extends shape {
    // construct dijalankan pada saat pertama kali class dijalankan;
    public function __construct(int $num)
    {
        echo "INI CONSTRUCT DARI CLASS RETANGLE <br>";
        parent::__construct($num, "VP");
        echo "<br>";
    }

    public function getNum(): int 
    {
        return 90901;
    }

    public function getName(): string 
    {
        return "I LOVE YOU";
    }

    public function retangle1() 
    {
        echo $this->num."<br>";
        echo $this->name."<br>";

        echo parent::getNum()."<br>";
        echo parent::getName();
    }

    // destruct dijalankan pada terakhir kali setelah semua function telah dijalankan;
    public function __destruct()
    {
        echo "<br> INI DESTRUCT";
    }
}