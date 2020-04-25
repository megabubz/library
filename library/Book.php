<?php

namespace library;

interface MakeaBook {

    public function setBookTitle($title);
    public function setQuantity($quantity, $operation);
}

class Book implements MakeaBook {

    private $bookid;
    private $title;
    private $author;
    private $genre;
    private $loanlength;
    private $quantity;
    
    const baseallowance = 5;
    const label = "AmazingLibrary";

    public function __construct($bookid, $title, $author, $genre, $loanlength, $quantity) {
        $this->bookid = $bookid;
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->loanlength = $loanlength;
        $this->quantity = $quantity;
    }

    public function setBookTitle($title) {
        "Title updated to " . $this->title = $title;
    }

    public function getBookTitle() {
        return $this->title;
    }

    public function setQuantity($quantity, $operation) {
        if ($operation = "+") {
            echo "Quantity updated to " . $this->quantity = ($this->quantity) + $quantity;
        } elseif ($operation = "-") {
            echo "Quantity updated to " . $this->quantity = ($this->quantity) - $quantity;
        }
    }

    public function getQuantity() {
        return $this->quantity;
    }
    
    public function __toString() {
        return $this->title;
    }

}
