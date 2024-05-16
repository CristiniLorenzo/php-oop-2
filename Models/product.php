<?php
class product {
    public $name;
    public $image;
    public $price;
    private $type;
    private $category;

    public function __construct($_name, $_image, $_price, $_type, $_category){
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->type = $_type;
        $this->category = $_category;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }
}
          
?>