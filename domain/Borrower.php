<?php

namespace domain;

require_once 'Traits.php';
require_once 'User.php';

class Borrower extends User {

    // TRAIT
    use borrowable;
    
    protected $userid;
    protected $firstname;
    protected $lastname;
    protected $dob;
    protected $email;
 
    public function __construct($userid, $firstname, $lastname, $dob, $email) {
        $this->userid = $userid;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->email = $email;
    }

   public function setFirstName($firstname) {
        return $this->firstname = $firstname;
    }
    
    public function getFirstName() {
        return $this->firstname;
    }

    public function checkFirstName() {
        if (empty($this->firstname)) {
            die('NEED A FIRSTNAME!');
        }
        echo $this->firstname;
    }

    public function searchFirstName($firstname) {
        if ($this->firstname != $firstname) {
            die($firstname . " doesn't exist");
        }
        echo $firstname . " exists";
    }

}
