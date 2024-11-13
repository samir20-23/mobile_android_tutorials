 
<?php

require(__DIR__ . '/../MANAG/manag.php');


class Ask extends Manager
{
    public $fileJson = __DIR__ . '/../DATA/data.json';

    function getInput($ask)
    {
        echo $ask;
        return trim(fgets(STDIN));
    }

    public function __construct()
    {
        $this->LOGO();
        $word = '
        ##############################' . PHP_EOL .
            '[a] => add book' . PHP_EOL .
            '[v] => show the books' . PHP_EOL .
            '[ex] => exit the application' . PHP_EOL .
            '##############################' . PHP_EOL;

        $screenWidth = 80;
        $lines = explode("\n", $word);
        foreach ($lines as $line) {
            $line = trim($line);
            $padding = max(0, ($screenWidth - strlen($line)) / 2);
            echo "\033[1;37m" . str_repeat(' ', (int)$padding) . $line . "\033[0m\n";
        }

        $this->option = $this->getInput('enter (add or ex or v) :: ');
        if ($this->option == "add") {
            $this->ISBN = $this->getInput('enter ISBN :: ');
            $this->title = $this->getInput('enter title :: ');
            $this->author = $this->getInput('enter author :: ');
            $this->date = $this->getInput('enter date  :: ');
        } else if ($this->option == 'ex') {
            echo "Exiting...\n";
        }
    }
}
