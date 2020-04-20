<?php
// WE COULD TRY ADDING A LARGER BOOK ALLOWANCE FOR VIP MEMBERS

namespace library;

Class VIPmember extends Member {

    public function showVip($firstname) {
        if ($this->firstname != $firstname) {
            die($firstname . " isn't a VIP member");
        }
        echo $firstname . " is a VIP member";
    }

}
