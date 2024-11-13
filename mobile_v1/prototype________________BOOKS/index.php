<?php

require_once 'Book.php';
require_once 'Author.php';
require_once 'Reader.php';
require_once 'Loan.php';
require_once 'Library.php';

$library = new Library();

function getInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

while (true) {
    echo "\nLibrary Management System\n";
    echo "1. Add Author\n";
    echo "2. Add Book\n";
    echo "3. Add Reader\n";
    echo "4. Add Loan\n";
    echo "5. Exit\n";
    $choice = getInput("Enter your choice: ");

    switch ($choice) {
        case 1:
            $firstName = getInput("Enter author's first name: ");
            $lastName = getInput("Enter author's last name: ");
            $nationality = getInput("Enter author's nationality: ");
            $author = new Author($firstName, $lastName, $nationality);
            $library->addAuthor($author);
            echo "Author added successfully.\n";
            break;

        case 2:
            $isbn = getInput("Enter book ISBN: ");
            $title = getInput("Enter book title: ");
            $authors = explode(',', getInput("Enter book authors (comma-separated): "));
            $publicationDate = getInput("Enter book publication date (YYYY-MM-DD): ");
            $book = new Book($isbn, $title, $authors, $publicationDate);
            $library->addBook($book);
            echo "Book added successfully.\n";
            break;

        case 3:
            $cardNumber = getInput("Enter reader card number: ");
            $firstName = getInput("Enter reader's first name: ");
            $lastName = getInput("Enter reader's last name: ");
            $address = getInput("Enter reader's address: ");
            $reader = new Reader($cardNumber, $firstName, $lastName, $address);
            $library->addReader($reader);
            echo "Reader added successfully.\n";
            break;

        case 4:
            $startDate = getInput("Enter loan start date (YYYY-MM-DD): ");
            $dueDate = getInput("Enter loan due date (YYYY-MM-DD): ");
            $isbn = getInput("Enter book ISBN: ");
            $cardNumber = getInput("Enter reader card number: ");

            if (isset($library->books[$isbn]) && isset($library->readers[$cardNumber])) {
                $book = $library->books[$isbn];
                $reader = $library->readers[$cardNumber];
                if ($book->available) {
                    $loan = new Loan($startDate, $dueDate, $book, $reader);
                    $library->addLoan($loan);
                    echo "Loan added successfully.\n";
                } else {
                    echo "Book is not available.\n";
                }
            } else {
                echo "Invalid book ISBN or reader card number.\n";
            }
            break;

        case 5:
            exit("Exiting...\n");

        default:
            echo "Invalid choice. Please try again.\n";
    }
}
?>
