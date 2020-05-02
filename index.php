<?php

require 'domain/User.php';
require 'domain/Borrower.php';
require 'domain/Student.php';
require 'domain/Book.php';
require 'domain/Librarian.php';
require_once 'domain/Traits.php';

use domain\User;
use domain\Borrower;
use domain\Student;
use domain\Book;
use domain\Librarian;
use domain\borrowable;

// CREATING BOOK OBJECTS -----------------------------------------------------------------------

$book1 = new Book(1, "Summertime", "Joe Wicks", "Novel", 14, 1);
$book2 = new Book(2, "1984", "George Orwell", "Science Fiction", 14, 5);


// CREATE A USER  -----------------------------------------------------------------------

$Borrower = new Borrower(1, 'Sam', 'Smith', '08/08/1990', 'samsmith@gmail.com');



// USER CAN BORROW A BOOK -----------------------------------------------------------------------

$Borrower->setBorrowedBook($book1);  
echo($Borrower->getFirstName() . " has added " . $Borrower->getBorrowedBook()) . " to their cart " . PHP_EOL . PHP_EOL;


// UPDATE USER'S NAME -----------------------------------------------------------------------

echo $Borrower->getFirstName() . "'s first name has updated to " . $Borrower->setFirstName('Samantha') . PHP_EOL . PHP_EOL;


// ECHO THE BOOK'S CONSTANT VALUE -----------------------------------------------------------------------

echo "All books have a constant: " . $book1::label . PHP_EOL . PHP_EOL;


// UPDATE BOOK QUANTITY -----------------------------------------------------------------------

echo $book1->setBookTitle("Wintertime"); 

echo $book1->getBookTitle() . PHP_EOL . PHP_EOL;

echo $book1->setQuantity(5, "+");

echo "Book quantity value is still " . $book1->getQuantity() . PHP_EOL . PHP_EOL;


// SEE IF SOMEONE IS A STUDENT MEMBER ----------------------------------------------------------
$Student =  new Student(2, 'Sarah', 'Gartner', '1999/05/11', 'sarah@live.co.uk'); 
echo $Student->isStudent('Sarah');
