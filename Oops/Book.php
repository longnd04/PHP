<?php

namespace phptest\Oops;

class Book
{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getDetails()
    {
        return "Title: {$this->title} Author: {$this->author} Price: {$this->price} <br/>";
    }
}
