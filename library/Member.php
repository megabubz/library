<?php

namespace library;

class Member {

    // THE MEMBER HAS A CART
    protected $userid;
    protected $firstname;
    protected $lastname;
    protected $dob;
    protected $email;
    protected Cart $cart;

    //
    public function __construct($userid, $firstname, $lastname, $dob, $email, Cart $cart) {
        $this->userid = $userid;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->email = $email;
        $this->cart = $cart;
    }

    // Getter method to get what's inside the Cart
    // Creating a function means we can access the $cart variable which is 'protected'.
    public function getCart() {
        return $this->cart;
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

    public function updateFirstName($firstname) {
        return $this->firstname = $firstname;
    }

    public function searchFirstName($firstname) {
        if ($this->firstname != $firstname) {
            die($firstname . " doesn't exist");
        }
        echo $firstname . " exists";
    }

     
}


