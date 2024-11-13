<?php

class Library {
    private $books = [];
    private $authors = [];
    private $readers = [];
    private $loans = [];
    private $filePath = 'library_data.json';

    public function __construct() {
        $this->loadData();
    }

    public function addBook($book) {
        $this->books[$book->isbn] = $book;
        $this->saveData();
    }

    public function addAuthor($author) {
        $this->authors[$author->firstName . ' ' . $author->lastName] = $author;
        $this->saveData();
    }

    public function addReader($reader) {
        $this->readers[$reader->cardNumber] = $reader;
        $this->saveData();
    }

    public function addLoan($loan) {
        $this->loans[] = $loan;
        $loan->book->available = false;
        $this->saveData();
    }

    public function saveData() {
        $data = [
            'books' => array_map(function($book) { return $book->toArray(); }, $this->books),
            'authors' => array_map(function($author) { return $author->toArray(); }, $this->authors),
            'readers' => array_map(function($reader) { return $reader->toArray(); }, $this->readers),
            'loans' => array_map(function($loan) { return $loan->toArray(); }, $this->loans)
        ];
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function loadData() {
        if (file_exists($this->filePath)) {
            $data = json_decode(file_get_contents($this->filePath), true);
            foreach ($data['books'] as $bookData) {
                $this->books[$bookData['isbn']] = new Book($bookData['isbn'], $bookData['title'], $bookData['authors'], $bookData['publicationDate'], $bookData['available']);
            }
            foreach ($data['authors'] as $authorData) {
                $this->authors[$authorData['firstName'] . ' ' . $authorData['lastName']] = new Author($authorData['firstName'], $authorData['lastName'], $authorData['nationality']);
            }
            foreach ($data['readers'] as $readerData) {
                $reader = new Reader($readerData['cardNumber'], $readerData['firstName'], $readerData['lastName'], $readerData['address']);
                foreach ($readerData['loans'] as $loanData) {
                    $book = $this->books[$loanData['book']['isbn']];
                    $loan = new Loan($loanData['startDate'], $loanData['dueDate'], $book, $reader);
                    $loan->returnDate = $loanData['returnDate'];
                    $reader->addLoan($loan);
                    $this->loans[] = $loan;
                }
                $this->readers[$reader->cardNumber] = $reader;
            }
        }
    }
}
?>
