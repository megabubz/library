<?php

require 'library/Borrower.php';
require 'library/VIPborrower.php';
require 'library/Book.php';
require 'library/Cart.php';

use library\Borrower;
use library\VIPborrower;
use library\Book;
use library\Cart;


// CREATING BOOK OBJECTS -----------------------------------------------------------------------
 
$book1 = new Book(1, "Summertime", "Joe Wicks", "Novel", 14, 1);
$book2 = new Book(2, "1984", "George Orwell", "Science Fiction", 14, 5);



// ADDING BOOKS TO MEMBER'S CART -----------------------------------------------------------------------
 
// 1. Create a Cart object 
$member1Cart = new Cart();

// 2. Create a Member and assign their attributes
$member1 = new Borrower(1, 'Sam', 'Smith', '08/08/1990', 'samsmith@gmail.com', $member1Cart);

// 3. Get the Member's Cart and add Book to it
$member1->getCart()->addBooks($book1);

// 4. Echo the Books that are in the Member's Cart. We get their first name and cart using our getter methods.       
echo($member1->getFirstName() . " has added " . $member1->getCart()) . " to their cart " . PHP_EOL . PHP_EOL; 



// UPDATE MEMBER'S NAME -----------------------------------------------------------------------

echo $member1->getFirstName() . "'s first name has updated to " . $member1->setFirstName('Samantha') . PHP_EOL . PHP_EOL;


// ECHO THE BOOK'S CONSTANT VALUE -----------------------------------------------------------------------

echo "All books have a constant: " . $book1::label . PHP_EOL . PHP_EOL;



// UPDATE BOOK QUANTITY -----------------------------------------------------------------------

echo $book1->setBookTitle("Wintertime") . PHP_EOL . PHP_EOL;

echo $book1->getBookTitle(); 

echo $book1->setQuantity(5, "+") . PHP_EOL . PHP_EOL;
echo "Book quantity value is still " .  $book1->getQuantity() . PHP_EOL . PHP_EOL;


// SEE IF SOMEONE IS A VIP MEMBER ----------------------------------------------------------

$member2cart = new Cart(); 
$member2 =  new VIPborrower(2, 'Sarah', 'Gartner', '1999/05/11', 'sarah@live.co.uk', $member2cart); 
echo $member2->showVip('Sarah');
