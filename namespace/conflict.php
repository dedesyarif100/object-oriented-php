<?php
// Namespace bisa mempunyai banyak class yang berbeda
namespace data\one {
    class conflict
    {
        var $satu = 11;
        var $dua = 22;

        public function angka1() {
            echo $this->satu;
            echo $this->dua;
        }
    }

    class Sample 
    {
        var $sample1 = "Sample 1";
        var $sample2 = [1,2,3,4,5];
        const ANGKA = 1230;
        const SAMPLE = [1,2,3,4,5];
        public function sample1() 
        {
            echo $this->sample1."<br>";
            foreach(self::SAMPLE as $x) {
                echo $x;
            }
            echo "<br>";
            foreach($this->sample2 as $y) {
                echo $y;
            }
            echo "<br>";
            for ($x = count($this->sample2) - 1; $x > 0; $x--) {
                echo $this->sample2[$x];
            }
            echo "<br>";
            for($i = 0; $i < count($this->sample2); $i++) {
                if ($this->sample2[$i] == 3) {
                    echo " || ";
                    for ($x = count($this->sample2) - 1; $x > 0; $x--) {
                        echo $this->sample2[$x];
                    }
                } else {
                    echo $this->sample2[$i];
                }
            }
            echo "<br>";
            echo self::ANGKA."<br>";
            for($i = 0; $i < count(self::SAMPLE); $i++) {
                if (self::SAMPLE[$i] == 3) {
                    echo " || ";
                    for ($x = count(self::SAMPLE) - 1; $x > 0; $x--) {
                        echo self::SAMPLE[$x];
                    }
                } else {
                    echo self::SAMPLE[$i];  
                }
            }
        }
        public function sample2() 
        {

        }
    }

    class Dummy
    {
        var $dummy1 = "DUMMY 1";
    }
}

namespace data\two {
    class conflict
    {
        var $tiga = "Tiga";
        var $empat = "Empat";

        public function angka2() {
            echo $this->tiga;
            echo $this->empat;
        }
    }
}