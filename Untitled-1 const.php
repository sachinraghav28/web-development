<html>
    <body>
    <h1> concept of constructor</h1>
       <?php
       class student {
          public $name;
          public $roll;
          public $percentage;
          function __construct($name,$roll,$percentage;){
               $this->name=$name;
               $this->roll=$roll;
               $this->percentage=$percentage;
            } 
          function set_name($name){
               $this->name=$name;
            }
            function get_roll(){
               return $this ->$roll;
            }
            function get_percentage(){
               return $this ->$percentage;
            }
        }
        $ram =new student("ram","2","63%");
        echo $ram->get_name();
        echo "<br>";       
        echo $ram->get_roll();
        echo "<br>";
        echo$ram->get_percentage();  
         ?>
</body>
</html>