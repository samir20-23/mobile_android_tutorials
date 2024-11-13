<?php

class Book {
    public $isbn;
    public $title;
    public $authors;
    public $publicationDate;
    public $available;

    public function __construct($isbn, $title, $authors, $publicationDate, $available = true) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->authors = $authors;
        $this->publicationDate = $publicationDate;
        $this->available = $available;
    }

    public function toArray() {
        return [
            'isbn' => $this->isbn,
            'title' => $this->title,
            'authors' => $this->authors,
            'publicationDate' => $this->publicationDate,
            'available' => $this->available
        ];
    }
}
?>
