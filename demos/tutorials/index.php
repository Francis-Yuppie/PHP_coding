 <?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


require_once "classes/ChildAssignment.php";


$class = new ChildAssignment(['start'=>0,'stop'=>100]);
echo ($class->evenNumbers(['stop'=>100,'result'=>'list','start'=>1,'type'=>'prime']));
echo "<br />";
echo("The mean is ".$class->calculateMean()['mean']);
echo "<br />";
print_r($class->calculateMedian());

 


?>

