<html>
    <body>
        <h1> concept of object</h1>
        <?php
       class fruit {
          public $name;
          public $color;
          function set_name($name){
             $this->name=$name;
            }
          function get_name(){
             return $this ->name;
            }
            function set_color($color){
                $this->color=$color;
            }
            function get_color(){
                return $this ->color;
            }
        }
        $apple=new fruit();
        $apple->set_name('apple');
        echo $apple->get_name();
        echo"<br>";
        $apple->set_color('red');
        echo $apple->get_color();
         ?>
    </body>
    </html>