<?php
namespace helper;

class Give {
    public $number = 12500;
    public const INDEX = 999;
    private $index = 321;
}

class Help
{
    public function __construct() 
    {
        echo "IBI CONSTRUCT DARI CLASS HELP";
        echo "<br>";
    }

    public function __destruct() 
    {
        echo "<br>";
        echo "INI DESTRUCT DARI CLASS HELP";
    }
    protected const INDEX = [
                            [1, 2, 3, 4, 5],
                            [6, 7, 8, 9, 10],
                        ];

    protected static $number = [
                            [1, 2, 3, 4, 5],
                            [6, 7, 8, 9, 10],
                            [11, 12, 13, 14, 15],
                            [16, 17, 18, 19, 20],
                        ];
}

class MathHelper extends Help
{
    public static string $name = "Math Helper";
    public static string $name1 = "Hendro";
    public static string $name2 = "Rian";
    public static string $name3 = "Trisuli";
    public static string $name4 = "Dede";
    public static string $name5 = "Mirdas";
    public static string $name6 = "Ali";
    public static $names = ["Hendro", "Rian", "Trisuli", "Dede", "Mirdas", "Ali"];
    public static $number = [
                                [1, 2, 3, 4, 5],
                                [6, 7, 8, 9, 10],
                                [11, 12, 13, 14, 15],
                                [16, 17, 18, 19, 20],
                            ];
    public $index = [
                        [1, 2, 3, 4, 5],
                        [6, 7, 8, 9, 10],
                    ];
    public const INDEX = [
                            [1, 2, 3, 4, 5],
                            [6, 7, 8, 9, 10],
                        ];
    public const ADMIN = [
                            [1, 2, 3, 4, 5],
                            [6, 7, 8, 9, 10],
                        ];

    static public function sum(int... $numbers) 
    {
        $total = 0;
        foreach($numbers as $number)
        {
            $total = $total + $number;
        }
        return $total;
    }

    public function applyAll()
    {
        echo $this->applyNames();
        echo $this->applyNumber();
        echo $this->applyIndexProperty();
        echo $this->applyIndexConstanta();
        echo $this->applyIndexFromParent();
        echo $this->applyNumberFromParent();
        echo $this->applyAdminConstanta();
        echo "<br>";
        $Give = new Give();
        echo $Give->number;
        echo "<br>";
        echo Give::INDEX;
    }

    public function applyNames() {
        echo MathHelper::$name1."<br>";
        echo MathHelper::$name2."<br>";
        echo MathHelper::$name3."<br>";
        echo MathHelper::$name4."<br>";
        echo MathHelper::$name5."<br>";
        echo MathHelper::$name6."<br>";
        foreach(MathHelper::$names as $name) {
            echo $name." - ";
        }
        echo "<br>";
        for($i = 0; $i < count(MathHelper::$names); $i++) {
            echo MathHelper::$names[$i]." - ";
        }
    }

    public function applyNumber() {
        echo "<br>";
        for($x = 0; $x < count(MathHelper::$number); $x++) {
            for($y = 0; $y < count(MathHelper::$number[$x]); $y++) {
                echo MathHelper::$number[$x][$y]." - ";
            }
        }
    }

    public function __destruct()
    {
        echo "<br>";
        echo "INI DESTRUCT DARI CLASS MATHHELPER";
    }

    public function applyNumberFromParent() {
        echo "<br>";
        for($x = 0; $x < count(Help::$number); $x++) {
            for($y = 0; $y < count(Help::$number[$x]); $y++) {
                echo Help::$number[$x][$y]." - ";
            }
        }
    }

    public function applyIndexProperty() {
        echo "<br>";
        for($x = 0; $x < count($this->index); $x++) {
            for($y = 0; $y < count($this->index[$x]); $y++) {
                echo $this->index[$x][$y]." - ";
            }
        }
    }

    public function applyIndexConstanta() {
        echo "<br>";
        for($x = 0; $x < count(self::INDEX); $x++) {
            for($y = 0; $y < count(self::INDEX[$x]); $y++) {
                echo self::INDEX[$x][$y]." - ";
            }
        }
    }

    public function applyAdminConstanta() {
        echo "<br>";
        for($x = 0; $x < count(MathHelper::ADMIN); $x++) {
            for($y = 0; $y < count(MathHelper::ADMIN[$x]); $y++) {
                echo MathHelper::ADMIN[$x][$y]." - ";
            }
        }
    }

    public function applyIndexFromParent() {
        echo "<br>";
        for($x = 0; $x < count(parent::INDEX); $x++) {
            for($y = 0; $y < count(parent::INDEX[$x]); $y++) {
                echo parent::INDEX[$x][$y]." - ";
            }
        }
    }

    public function __construct()
    {
        echo "IBI CONSTRUCT DARI CLASS MATHHELPER <br>";
    }

    public static function data1() {
        echo "Data - 1";
    }

    public function data2() {
        echo "Data - 2";
    }

    public function apply() {
        echo MathHelper::data1()."<br>";
        echo $this->data1()."<br>";
        echo $this->data2();
    }
}

echo MathHelper::$name."<br>";
echo MathHelper::sum(10, 10, 10, 10, 10);
echo "<br>";
$MathHelper = new MathHelper();
$MathHelper->applyAll();
echo "<br>";
$MathHelper->apply();

