 <?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

//including assignment.php located in classes directory
require_once "classes/Assignment.php";


//creating an instance of of the class assigned 
$class = new Assignment;

//calling and printing the results of evenNumbers method
echo ($class->evenOddPrimeNumbers(['stop'=>100,'result'=>'list','start'=>0,'type'=>'prime']));

