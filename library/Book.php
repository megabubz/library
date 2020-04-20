<?php
namespace library;

class Book {
    private $bookid;
    private $title;
    private $author;
    private $genre;
    private $loanlength;
    public $quantity;
    const label = "AmazingLibrary";
    
    public function __construct($bookid, $title, $author, $genre, $loanlength, $quantity) {
        $this->bookid = $bookid;
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->loanlength = $loanlength;
        $this->quantity = $quantity;
    }
    public function updateBookTitle($title) {
        return "Title updated to " . $this->title = $title;
    }

    public function updateQuantity($quantity, $operation) {
        if ($operation = "+") {
            echo "Quantity updated to " . $this->quantity = ($this->quantity) + $quantity;
        } elseif ($operation = "-") {
            echo "Quantity updated to " . $this->quantity = ($this->quantity) - $quantity;
        }
    }

        public function __toString()
    {
        return $this->title;
    }

}



