<?php
    class Product{
        // fields, attributes
        var $code;
        var $name;
        var $price;
        var $image_name;
        
        // constructor
        function __construct($defaultCode, $defaultName, $defaultPrice, $defaultImg)
        {
            $this->code = $defaultCode;
            $this->name = $defaultName;
            $this->price = $defaultPrice;
            $this->image_name = $defaultImg;
        }
        // methods, functions
        public function getcode()
        {
            return $this->code;
        }
        public function getname()
        {
            return $this->name;
        }
        public function getprice()
        {
            return  $this->price;
        }
        public function getImg()
        {
            return  $this->image_name;
        }
        

        
        
    }

    // create a new object from Book class (instance)
    // $book = new Book('TYU',15);

    // $books = array(
    //     new Book('XXG',12),
    //     new Book('OOP',80)
    // );
    // foreach($books as $b)
    // {
    //     echo "<p>".$b->getcode()."</p>";
    // }

?>