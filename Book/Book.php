<?php

class Book{
    /* Properties */
    public $title = "The Origin";
    private $price;
    protected $author;
    private $publisher = "Penguin Publisher";

    /* Methods*/
    public function displayTitle(){
        echo $this->title;
    }

    //Setter
    public function setPrice($new_price){
        $this->price = $new_price;
    }

    public function getPrice(){
        return $this->price;
    }
}

$math = new Book;

$science = new Book;

// $science->price = 30;

// $math->title = "Algebra";

// $math->displayTitle();

$science->setPrice(30);

echo $science->getPrice();

?>