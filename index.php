<?php
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$person = new Person("Nerd");
$phrases = ["We", "love", $person->getName()."s"];
$message = implode(" ", $phrases);

echo ucfirst($message);
?>
