<?php
class people {

    // __construct dijalankan pada saat pertama kali class dijalankan
    public function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function info()
    {
        // Keyword self, pemanggilan Constant dalam 1 class
        // echo "Author : ".self::AUTHOR;
        echo "This is info";
    }

    public function __destruct()
    {
        echo "Object person $this->name, address in $this->address is destroyed";
    }
}