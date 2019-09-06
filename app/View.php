<?php

class View
{

    protected $file;
    protected $data;

    public function __construct($file, $data)
    {

        $this->file = $file;
        $this->data = $data;

    }

    public function render()
    {

        if (file_exists(VIEW . $this->file . '.php')) {
            require_once VIEW . $this->file . '.php';
        }

    }

}
