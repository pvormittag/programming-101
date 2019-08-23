<?php

class Foo {
    private $bar = 'string';

    public function echoBar():string {
        echo $this->bar;
        return $this->bar;
    }
}

// $obj = new Foo();
// echo $obj->echoBar();
// exit;

// code using the class differently.

$obj = new Foo();
$obj->bar = new stdClass();
$obj->bar->name = 'Patrik code which is better then before';
echo $obj->bar->name;
$obj->echoBar();
exit;

class GrandMother {
    protected $first_name = null;
    protected $last_name = null;

    function __construct(string $name) {
        $name_parts = explode(' ', $name);

        $this->first_name = $name_parts[0];

        if (isset($name_parts[1])) {
            $this->last_name = $name_parts[1];
        }
    }

    public function workEthic() {
        return 'iron clad';
    }

    public function getName():string {
        $name = $this->first_name;

        if ($this->last_name) {
            $name .= ' ' . $this->last_name;
        }

        return $name;
    }

    public function getFirstName():string {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    // public function setName(string $name): void {
    //     $this->name = $name;
    // }
}

// class Mother extends GrandMother {

// }

// class Daughter extends Mother {
//     public function workEthic() {
//         return 'strong';
//     }
// }

$grandma = new GrandMother('Mildred Woodward');
$grandma2 = new GrandMother('Marjorie Head');

// $mom = new Mother();
// $courtney = new Daughter();

// $grandma->name = 'Musil';
echo $grandma->getName() . PHP_EOL;
echo $grandma->getFirstName() . PHP_EOL;

// echo $grandma->workEthic() . PHP_EOL;
// echo $mom->workEthic() . PHP_EOL;
// echo $courtney->workEthic() . PHP_EOL;

// abstract class Animal {
//     protected $sound = null;

//     // abstract private function getSound() {

//     public function speak(string $word): string {
//         return $this->sound . ', ' . $word . PHP_EOL;
//     }
// }

// class Dog extends Animal {
//     protected $sound = 'Woof';
// }

// class Cat extends Animal {
//     protected $sound = 'Meow';
// }

// class Cow extends Animal {
//     protected $sound = 'Moo';
// }

// $dog = new Dog();
// $cat = new Cat();
// $cow = new Cow();

// echo $dog->speak('John');
// echo $cat->speak('Patrik');
// echo $cow->speak('Patrik');
