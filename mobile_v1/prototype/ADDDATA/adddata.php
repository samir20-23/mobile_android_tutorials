 
<?php 
require(__DIR__ . '/../ASK/ask.php');

class AddData extends Ask{
   
     public $json; 
     public $ask; 
     
     public function __destruct() {
       
          if (file_exists($this->fileJson)) {
              $existingData = json_decode(file_get_contents($this->fileJson), true);
          
          } else {
              $existingData = [];
          }
          if($this->option == 'add'){
      if($this->ISBN != '' || $this->title != ''|| $this->author != '' || $this->date != ''){
         $book_data = [
              'ISBN' => $this->ISBN,
              'title' => $this->title,
              'author' => $this->author,
              'publication_date' => $this->date,
              'availability' => true
          ];
          
$animation = [
    "🔄 Connecting...",
    "✅ Connected Successfully!",
    "🎉 Operation Completed!",
    "⚙️ Processing...",
];

$screenWidth = 80;
$color = "\033[0;32m";

foreach ($animation as $message) {
    echo $color . str_pad($message, $screenWidth, ' ', STR_PAD_BOTH) . "\033[0m\n";
    usleep(500000);
}

echo $color . str_pad("✨ Thank you for using our application! ✨", $screenWidth, ' ', STR_PAD_BOTH) . "\033[0m\n";

               $existingData[] = $book_data;  
          $json = json_encode($existingData, JSON_PRETTY_PRINT);
          file_put_contents($this->fileJson, $json);
             
      }else{
        echo 'empty inputs .......';
      }
 }
      }
  

}
 
 