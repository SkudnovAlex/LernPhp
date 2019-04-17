<?php

class File
{
    public $fp;
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
        try {
            if (!is_writable($this->file)) {
                throw new Exception("Файл $this->file не доступен для записи<br>");
            }
            $this->fp = fopen($this->file, 'a');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __destruct()
    {
        try {
            if (empty($this->fp)) {
                throw new Exception("Не возможно закрыть файл $this->file<br>");
            }
            fclose($this->fp);
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function write($text)
    {
        try {
            if (fwrite($this->fp, $text . PHP_EOL) === false) {
                throw new Exception("Не возможно произвести запись в файл $this->file<br>");
            }
            return true;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}