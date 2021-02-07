<?php 

class Math{
    
  public $roll;
  public $roll2;

  public function __construct($first,$second){
     $this->roll = $first;
     $this->roll2 = $second;
     $this->display();
  }
   public function sum(){
   	  return $this->roll + $this->roll2;
   }
   public function mul($c=2){
   	  return $this->roll * $this->roll2 *$c;
   }
   public function display(){
   	echo "Welcome to TPI </br>";
   }

}

$foo = new Math(10,20);
echo $foo->sum();
echo '</br>';
$foo = new Math(20,5);
echo $foo->mul();
echo "<br>";
echo $foo->mul(4);
