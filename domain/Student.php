<?php

namespace domain;

Class Student extends Borrower {

    use borrowable;

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstName() {
        return $this->firstname;
    }

    public function isStudent($firstname) {
        if ($this->firstname != $firstname) {
            echo $firstname . " isn't a student";
            return true;
        }
        echo $firstname . " is a student";
        return false;
    }

}



//    public function isStudent($firstname) {
//        if ($this->firstname != $firstname) {
//            die($firstname . " isn't a VIP member");
//        }
//        echo $firstname . " is a VIP member";
//    }