<?php

namespace library;


//trait VIPborrowable { 
//    
////    const vipallowance = 10; 
////    public function amountborrowbale($allowance) {
////        if ($allowance = 5) {
////            
////            
////        }
//        
////    $this->allowance = $allowance + 1; 
////
//    }
// 
//}


trait borrowBook {
    
     public function addBooks(Book $book) {
        $this->books[] = $book;
    }
    
}