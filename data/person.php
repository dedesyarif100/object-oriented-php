<?php

class person {
    // keyword constant
    const AUTHOR = "Programmer Zaman Now";

    // Nullable Properties "?"
    var ?string $name;
    var ?string $address = null;
    var string $country;

    public function sayHello(?string $name) {
        if (is_null($name)) {
            // Keyword $this
            echo "Hi, my name is $this->name";
        } else {
            echo "Hi, $name my name is $this->name <br>";
        }
    }

    public function info()
    {
        // Keyword self, pemanggilan Constant dalam 1 class
        echo "Author : ".self::AUTHOR;
    }
}