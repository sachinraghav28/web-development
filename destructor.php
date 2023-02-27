<html>
    <body>
    <h1> concept of constructor</h1>
       <?php
         class fruit {
         public $name;
         public $color;
         public function _destruct($name,$color){
          $this->name = $name;
           $this->color = $color;
         } 
          public function intro (){
               echo "A{$this->name} is a and the color is{$this->color}.";
         }
      }
      class cherry extends fruit{
         public function message (){
            echo " is cherry a fruit or not ";
         }
      }
      $cherry1=new cherry("cherry","red");
      $cherry1->message();
      echo"<br>";
      $cherry1->intro();
        ?>
</body>
</html>