<?php
 
$time_start = microtime(true);
 
class TestClass {
public $test;
public function __construct($d) {
$this->test = $d;
}
public function getTest() {
return $this->test;
}
}
 
function doLoop() {
 
for($i = 1;$i <= 10000000;$i++) {
$f = new TestClass($i);
if($f->getTest() != $i)
print "woah somethign bad happened\n";
}
 
}
 
doLoop();
 
$time_end = microtime(true);
$time = $time_end - $time_start;
 
print "Version: " . phpversion() . "<br><br>";
print "Created 10,000,000 classes and did a get/compare on each one in $time seconds<br><br>";
print "Used ".number_format(memory_get_peak_usage(true), 2)." memory<br>"; 

