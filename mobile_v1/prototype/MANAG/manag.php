 
<?php
class Manager{
     public $option;
     public $ISBN;
     public $title;
     public $author;
     public $date;
     public $id;
 
     public function __construct($option, $ISBN, $title, $author, $date, $id){
        $this->option = $option;
         $this->ISBN = $ISBN;
         $this->title = $title;
         $this->author = $author;
         $this->date = $date;
         $this->id = $id; 
     }
     public function LOGO(){
    
        $colors = [
            "\033[0;31m", 
            "\033[0;32m", 
            "\033[0;33m", 
            "\033[0;34m", 
            "\033[0;35m", 
            "\033[0;36m", 
            "\033[1;31m", 
            "\033[1;32m", 
            "\033[1;33m", 
            "\033[1;34m", 
            "\033[1;35m", 
            "\033[1;36m", 
        ];
        
        
        $reset = "\033[0m";
        
        function getRandomColor($colors) {
            return $colors[array_rand($colors)];
        }
        
        $textColor = getRandomColor($colors);
        
        $word = "
                ===========================================================================================
                  AAA     PPPPP     PPPPP    L       III     CCC     AAA    TTTTT    III     OOO     N    N
                 A   A    P    P    P    P   L        I     C       A   A     T       I     O   O    N N  N
                 AAAAA    PPPPP     PPPPP    L        I     C       AAAAA     T       I     O   O    N  N N
                 A   A    P         P        L        I     C       A   A     T       I     O   O    N   NN
                 A   A    P         P        LLLLL   III     CCC    A   A     T      III     OOO     N    N
                 ==========================================================================================
        ";
        
        echo $textColor  . $word . $reset;
     
     }
 }
 