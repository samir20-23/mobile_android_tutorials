<?php

class Reader {
    public $cardNumber;
    public $firstName;
    public $lastName;
    public $address;
    public $loans;

    public function __construct($cardNumber, $firstName, $lastName, $address) {
        $this->cardNumber = $cardNumber;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->loans = [];
    }

    public function addLoan($loan) {
        $this->loans[] = $loan;
    }

    public function toArray() {
        return [
            'cardNumber' => $this->cardNumber,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'address' => $this->address,
            'loans' => array_map(function($loan) { return $loan->toArray(); }, $this->loans)
        ];
    }
}
?>
