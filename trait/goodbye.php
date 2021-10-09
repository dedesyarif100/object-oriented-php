<?php
namespace data\Traits;

trait goodbye {
    public string $name;
    private $number = 123;
    public $bool = true;
    public $text = "TEXT text";
    public $index = [1,2,3,4,5,6];

    public function goodBye(?string $name)
    {
        if (is_null($name)) {
            echo "Good Bye";
        } else {
            echo "Good Bye $name";
        }
    }
    public function number(): int
    {
        echo "<br>";
        return 111111111111111111;
    }

    public function string(): string
    {
        echo "<br>";
        return $this->text;
    }

    public function array()
    {
        foreach($this->index as $num => $value) {
            echo "<br>";
            echo "$num = $value";
        }
    }

    public function __destruct() {
        echo "<br>";
        echo "DESTRUCT DI TRAIT GOODBYE";
    }
    private function bye()
    {
        echo "<br>";
        echo "BYE";
    }

    protected function php() 
    {
        echo "<br>";
        echo "THIS IS PHP";
    }

    public function __construct() {
        echo "CONSTRUCT DI TRAIT GOODBYE";
    }
}

trait sayhello {
    public $num = 222;
    public function hello(?string $name) 
    {
        if (is_null($name)) {
            echo "Hello";
        } else {
            echo "Hello $name";
        }
    }

    public function laravel() 
    {
        // echo goodbye::$text;
        // echo goodbye::bye();
        echo $this->number();
        echo $this->string();
        echo $this->array();
        echo $this->bye();
        echo $this->php();
    }
}

trait HasName {
    // dalam trait dapat memiliki properties
    public string $name;
}

trait CanRun {
    // dalam trait dapat memiliki abstract function, abstract function tersebut wajib di override di class turunannya
    public abstract function run();
}

class ParentPerson {
    public function goodBye(?string $name) 
    {
        echo "Good Bye in Person";
    }

    public function hello(?string $name) 
    {
        echo "Hello in Person";
    }

    public function temp()
    {
        echo "INI FUNCTION TEMP";
    }
}

trait All {
    // pemanggilan trait dapat dilakukan menggunakan code di bawah ini
    use goodbye, sayhello, HasName, CanRun {
        // bisa di override
        // goodBye as private;
        // hello as private;
    }
}

class Person extends ParentPerson {
    use All;
    public function run() {
        echo "Person $this->name is running";
    }

    // Jika dalam trait memiliki nama function yang sama, maka function secara otomatis akan di override dengan trait
    public function goodBye(?string $name) 
    {
        echo "Good Bye in Person";
    }

    public function hello(?string $name) 
    {
        echo "Hello in Person";
    }
}