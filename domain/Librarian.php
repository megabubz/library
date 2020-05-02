<?php

namespace domain;

class Librarian extends User {

public function setFirstName($firstname) {
$this->firstname = $firstname;
}

public function getFirstName(){
    return $this->firstname; 
}

}



