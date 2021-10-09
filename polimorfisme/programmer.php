<?php
class programmer 
{
    public string $name = "Dede";
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends programmer {
    // public function hello(Programmer $programmer) {
    //     echo $programmer->name;
    // }
}

class FrontendProgrammer extends programmer {
    
}

class company {
    public programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer) {
    // echo "Hello Programmer $pogrammer->name";
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name";
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name";
    } else if ($programmer instanceof programmer) {
        echo "Hello Programmer $programmer->name";
    }
}