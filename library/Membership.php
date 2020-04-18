<?php

namespace library;

require_once('library/Member.php'); 
use library\Member;

class VIPMember extends Member {
   
    public function ShowVIP ($firstname) {
        if($this->$firstname !=$firstname)
        {die($firstname . " isn't a VIP member");}
        echo $firstname . " is a VIP member"; 
            
    }
    
}
