<?php

namespace domain;

// changes: added a getter, changed names of traits & functions

trait borrowable {

    protected $book;

    public function setBorrowedBook($book) {
        $this->book = $book;
    }

    public function getBorrowedBook() {
        return $this->book;
    }

}
