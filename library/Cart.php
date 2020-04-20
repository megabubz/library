<?php

// TO FIGURE OUT: HOW TO ALLOW MULTIPLE BOOKS TO BE ADDED

namespace library;

class Cart {

    protected $books = array();

    public function __construct() {    
    }

    public function addBooks(Book $book) {
        $this->books[] = $book;
    }
    
    // If we don't convert to string, an error below shows
    // "Uncaught Error: Object of class library\Cart could not be converted to string"
    // This function gets called automatically and is a 'magic function' 
    
        public function __toString()
    {
        return implode ('', $this->books);
    }
    
}