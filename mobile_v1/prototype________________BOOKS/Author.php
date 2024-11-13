<?php

class Author {
    public $firstName;
    public $lastName;
    public $nationality;

    public function __construct($firstName, $lastName, $nationality) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nationality = $nationality;
    }

    public function toArray() {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'nationality' => $this->nationality
        ];
    }
}
?>
