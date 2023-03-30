<?php
   require_once "Assignment.php";
   require_once "MyAssignment.php";

   class ChildAssignment extends Assignment{
     use MyAssignment; 
     public $range;
     public function __construct($range=['stop'=>100,'start'=>0]){
        $this->range = $range; 
  }
  
}





?>