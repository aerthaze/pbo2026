<?php

class Author
{
    public $name;
    public $description;

    public function show($type)
    {
        
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll()
    {
        
    }

    public function detail($ISBN)
    {
        
    }
}

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}

?>