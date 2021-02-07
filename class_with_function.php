<?php
//use class with function 
class Math{
   public $a=12;
   public $b=30;
   
   public function sum(){
      $c= $this->a + $this->b;
      return $c;
   }
  public function sum_relt(){
         $this->a=30;
     
   echo 'Result is' . $this->sum() ;

  }


}
$calculate = new Math();
echo $calculate->sum();
echo "</br>";
$calculate->b=10;
$calculate->sum_relt();
echo "</br>";

echo $calculate->a;