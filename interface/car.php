<?php
namespace Data;

// Setiap class yang terhubung dengan interface, dihubungkan dengan keyword "implements"
// Setiap interface yang terhubung dengan interface, dihubungkan dengan keyword "extends"
// Setiap method yang berada di dalam interface, wajib di ovveride di class turunannya

interface HashBrand 
{
    function getBrand();
}

interface IsMaintenance
{
    function IsMaintenance();
}

interface Car extends HashBrand
{
    function drive();

    function getTire();
}

class Avanza implements Car, IsMaintenance
{
    public function drive() 
    {
        echo "Drive Avanza";
    }

    public function getTire(): int 
    {
        return 4;
    }

    public function getBrand() 
    {
        return "Toyota";
    }

    public function IsMaintenance() 
    {
        return false;
    }
}