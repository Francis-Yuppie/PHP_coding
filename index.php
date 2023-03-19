 <?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require_once "classes/Assignment.php";

$class = new Assignment;
echo ($class->evenNumbers(['stop'=>100,'result'=>'list','start'=>0,'type'=>'prime']));

