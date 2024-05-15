<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php

            $products = [];

            $products[] = new Product("Cibo per cani", "#", 7, "cibo", "cane"); //new Category("Gatto", ""), new ProductType("Cibo", "Bla Bla Bla Bla Bla "));
            $products[] = new Product("Lettiera", "#", 49.99, "cuccia", "gatto");  //new Category("Gatto", ""), new ProductType("Gioco", "Bla Bla Bla Bla "));
            $products[] = new Product("Osso di gomma", "#", 9, "gioco", "cane"); //new Category("Cane", ""), new ProductType("Cuccia", "Bla Bla "));

            foreach ($products as $product){
            ?>

            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->name ?></h5>
                <p class="card-text"><?php echo $product->getType() ?></p>
                <h5 class="card-title"><?php echo $product->price ?>€</h5>
                
            </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>