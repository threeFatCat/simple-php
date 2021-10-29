<?php

class NameLists
{
    public $names;

    public function __construct()
    {
        $this->names = ['John', 'Mark', 'Dennis', 'Rigor'];
    }

    public function sortAlphabetically()
    {
        usort($this->names, function ($first, $second) {
            return strcmp($first, $second);
        });

        return $this->names;
    }

}

$name_lists = new NameLists;
var_dump($name_lists->sortAlphabetically());
