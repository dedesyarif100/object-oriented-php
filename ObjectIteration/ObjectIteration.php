<?php
class Data
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "third";
    protected string $forth = "forth";
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value";
    echo "<br>";
}