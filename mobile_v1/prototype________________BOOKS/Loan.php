<?php

class Loan {
    public $startDate;
    public $dueDate;
    public $returnDate;
    public $book;
    public $reader;

    public function __construct($startDate, $dueDate, $book, $reader) {
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
        $this->returnDate = null;
        $this->book = $book;
        $this->reader = $reader;
    }

    public function returnBook($returnDate) {
        $this->returnDate = $returnDate;
        $this->book->available = true;
    }

    public function toArray() {
        return [
            'startDate' => $this->startDate,
            'dueDate' => $this->dueDate,
            'returnDate' => $this->returnDate,
            'book' => $this->book->toArray(),
            'reader' => $this->reader->toArray()
        ];
    }
}
?>
