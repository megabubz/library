<?php

namespace library;

//first line of codie - data type of attributes for userid

class Member {

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

}

class VIPMember extends Member {

    public function ShowVIP($firstname) {
        if ($this->firstname != $firstname) {
            die($firstname . " isn't a VIP member");
        }
        echo $firstname . " is a VIP member";
    }

}

$member1 = new VIPMember(1, 'Sam', 'Smith', '08/08/1990', 'samsmith@gmail.com');
echo $member1->ShowVIP('Sam');


//
//public function getfirstname (){
//    return $this->firstname;
//}
//
//public function checkfirstname() {
//if(empty($this->firstname))
//{die ('NEED A FIRSTNAME!');}
//        echo $this->firstname; }
//
//public function updatefirstname($firstname) {
//        return $this-> firstname = $firstname;
//        }
//
//public function searchfirstname ($firstname) {
// if ($this->firstname !=$firstname)        {
// die($firstname . " doesn't exist");}
// echo $firstname . " exists";
//      }
// }
//    
//}
