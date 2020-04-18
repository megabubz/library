<?php


require_once 'library/Member.php'; 

use library\Member;
use library\VipMember;

$member1 = new VIPMember(1, 'Sam', 'Smith','08/08/1990' , 'samsmith@gmail.com');
//echo $member1->checkfirstname();
//echo $member1->updatefirstname('Samantha');
echo $member1->ShowVIP('Sam');
