<html>
   
   <head>
      <title>Bài tập</title>
   </head>
   <body>
       <p>bài tập 1</p>
   
     <?php
       class coucu {  
        private $x, $y;  
        
        function __construct( $x, $y ) {  
          $this->_x = $x;  
          $this->_y = $y;  
        }  
        
        function add() {  
          return $this->_x + $this->_y;  
        }  
        
         function add1() {  
          return $this->_x - $this->_y;  
        }  
        
         function add2() {  
          return $this->_x * $this->_y;  
        }  
      
         function add3() {  
          return $this->_x / $this->_y;  
        }  
      }  
        $maytinh = new coucu(100, 20);   
        echo $maytinh-> add(); 
        echo "<br>";
        echo $maytinh-> add1(); 
        echo "<br>";
        echo $maytinh-> add2(); 
        echo "<br>";
        echo $maytinh-> add3();
    ?>
    <?php 
      
      class hinhvuong  {  
      private $x;  
        
        function __construct( $x) {
          $this->_x = $x ;
        }
        function C () {
          return $this->_x * 4 ;
        }
        function D () {
          return $this->_x * $this->_x;
        }
      }
        $chuvivadientich = new hinhvuong (20);
        echo $chuvivadientich-> C() ;
        echo "<br>" ;
        echo $chuvivadientich-> D() ;
    ?>
    <?php

      class tamgiac {
        private $a ,$b , $c, $h;

        function __construct($a ,$b ,$c ,$h) {
          $this->_a = $a;  
          $this->_b = $b; 
          $this->_c = $c;  
          $this->_h = $h;   
      }
      function D() {  
        return $this->_c * 0.5 *  $this->_h ;  
      }
      function C() {  
        return $this->_a+ $this->_b + $this->_c ;
      }
      }
      $dientichvachuvi = new tamgiac (7 ,5 ,10 ,6);   
      echo $dientichvachuvi-> D(); 
      echo "<br>";
      echo $dientichvachuvi-> C(); 
      echo "<br>";
    ?>




    </body>
</html>

