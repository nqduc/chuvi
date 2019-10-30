<html>
   
  <head>
      <title>exercise</title>
  </head>
  <body>
      <p>exercise1</p>
   
  <?php
    class calculation {  
    private $x, $y;  
    
    function __construct ( $x, $y ) {  
      $this->_x = $x;  
      $this->_y = $y;  
    }  
    
    function in_calculation() {  
      return $this->_x + $this->_y;  
    }  
    
      function in_calculation1() {  
      return $this->_x - $this->_y;  
    }  
    
      function in_calculation2() {  
      return $this->_x * $this->_y;  
    }  
  
      function in_calculation3() {  
      return $this->_x / $this->_y;  
    }  
    }  
    $computer = new calculation(100, 20);   
    echo $computer-> in_calculation(); 
    echo "<br>";
    echo $computer-> in_calculation1(); 
    echo "<br>";
    echo $computer-> in_calculation2(); 
    echo "<br>";
    echo $computer-> in_calculation3();
?>
<?php 
  
  class square  {  
  private $x;  
    
    function __construct( $x) {
      $this->_x = $x ;
    }
    function perimeter () {
      return $this->_x * 4 ;
    }
    function electricity () {
      return $this->_x * $this->_x;
    }
    }
    $total = new square (20);
    echo $total-> perimeter() ;
    echo "<br>" ;
    echo $total-> electricity() ;
?>
<?php

  class triangle {
  private $a ,$b , $c, $h;

      function __construct($a ,$b ,$c ,$h) {
      $this->_a = $a;  
      $this->_b = $b; 
      $this->_c = $c;  
      $this->_h = $h;   
  }
  function electricity() {  
    return $this->_c * 0.5 *  $this->_h ;  
  }
  function perimeter() {  
    return $this->_a+ $this->_b + $this->_c ;
  }
  }
  $total = new triangle(7 ,5 ,10 ,6);   
  echo $total->electricity(); 
  echo "<br>";
  echo $total->perimeter(); 
  echo "<br>";
?>
</body>
</html>

