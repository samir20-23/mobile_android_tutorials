<?php 

 require(__DIR__ . '/../ADDDATA/adddata.php'); 
 
class View extends AddData{
 
public function Start(){
 
      if($this->option == 'v'){
          if (file_exists($this->fileJson)) {
               $data = file_get_contents($this->fileJson);
               $json = json_decode($data, true);
           
               foreach ($json as $book) {
                   echo 'ISBN: ' . ($book['ISBN'] ?? 'N/A') . PHP_EOL;
                   echo 'Title: ' . ($book['title'] ?? 'N/A') . PHP_EOL;
                   echo 'Author: ' . ($book['author'] ?? 'N/A') . PHP_EOL;
                   echo 'Publication Date: ' . ($book['publication_date'] ?? 'N/A') . PHP_EOL;
                   echo 'Availability: ' . ($book['availability'] ? 'Available' : 'Not Available') . PHP_EOL; 
                   echo "\033[1;31m" . str_pad('------------------------', 50, ' ', STR_PAD_BOTH) . "\033[0m" . PHP_EOL;
   
               }
           }
     }
  
}
}
