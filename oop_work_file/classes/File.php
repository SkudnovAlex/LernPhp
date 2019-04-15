<?php

class File
{
    public $fp;
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
        if(!is_writable($this->file)) {
            echo "Файл $this->file не доступен для записи";
            die();
        }
        $this->fp = fopen($this->file, 'a');
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function write($text)
    {
        if (fwrite($this->fp, $text . PHP_EOL) === false) {
            echo "Не возможно произвести запись в файл $this->file";
            die();
        }
    }
}