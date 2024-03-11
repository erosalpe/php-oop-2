<?php
class Product
{
    public $nome;
    public $tipo;
    function __construct($_nome, $_tipo)
    {
        $this->nome = $_nome;
        $this->tipo = $_tipo;
    }
    public function getProductName()
    {
        return $this->nome;
    }
    public function getProductType()
    {
        return $this->tipo;
    }
    public function setProductName($_nome)
    {
        return $this->nome = $_nome;
    }
    public function setProductType($_tipo)
    {
        return $this->tipo = $_tipo;
    }
}

class ProductInfo extends Product
{
    public $category;
    public $image;
    public $price;
    public $animal;
    use Discount;

    public function __construct($_image, $_price, $_animal, $_description, $_nome = '', $_tipo = '')
    {
        parent::__construct($_nome, $_tipo);
        $this->image = $_image;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->description = $_description;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($_image)
    {
        return $this->image = $_image;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($_price)
    {
        return $this->price = $_price;
    }
    public function getAnimal()
    {
        return $this->animal;
    }
    public function setAnimal($_animal)
    {
        return $this->animal = $_animal;
    }
}

trait Discount {
    public function setDiscountPrice($_discount)
    {
        if (!is_int($_discount)) {
            throw new Exception('Is not a number');
        }
        if ($this->tipo == 'Gioco'){
            settype($this->price, "integer");
            $this->price = ($this->price - ($_discount / 100));
            return "$this->price$ <span class='text-light bg-danger rounded-pill p-1'>-$_discount%</span>";
        } else {
            return $this->price;
        }
       
    }
}




$product1 = new ProductInfo('https://picsum.photos/200', '6.99$', 'Cane', 'Un divertente giocattolo a forma di osso per il tuo amico a quattro zampe.', 'Giocattolo a forma di osso', 'Gioco');
$product2 = new ProductInfo('https://picsum.photos/200', '8.49$', 'Gatto', 'Un morbido cuscino perfetto per il riposo del tuo felino.', 'Cuscino', 'Accessori');
$product3 = new ProductInfo('https://picsum.photos/200', '13.99$', 'Cane', 'Un guinzaglio resistente e alla moda per portare a spasso il tuo fedele compagno.', 'Guinzaglio', 'Accessori');
$product4 = new ProductInfo('https://picsum.photos/200', '4.99$', 'Gatto', 'Un giocattolo interattivo per intrattenere il tuo gatto per ore.', 'Palla rimbalzante', 'Gioco');
$product5 = new ProductInfo('https://picsum.photos/200', '21.99$', 'Cane', 'Una comoda cuccia imbottita per il riposo del tuo cane.', 'Cuccia', 'Accessori');
$product6 = new ProductInfo('https://picsum.photos/200', '11.49$', 'Gatto', 'Un tiragraffi resistente e pratico per il benessere delle unghie del tuo gatto.', 'Tiragraffi', 'Accessori');
$product7 = new ProductInfo('https://picsum.photos/200', '17.99$', 'Cane', 'Un set di spazzole per la toelettatura del tuo cane, per mantenerlo sempre pulito e pettinato.', 'Set di spazzole', 'Accessori');
$product8 = new ProductInfo('https://picsum.photos/200', '9.99$', 'Gatto', 'Un giocattolo a forma di topo che emette suoni realistici per divertire il tuo gatto.', 'Giocattolo a forma di topo', 'Gioco');
$product9 = new ProductInfo('https://picsum.photos/200', '24.99$', 'Cane', 'Un robusto portagiochi per mantenere in ordine i giocattoli del tuo cane.', 'Portagiochi', 'Accessori');
$product10 = new ProductInfo('https://picsum.photos/200', '5.49$', 'Gatto', 'Un guinzaglio elastico per gatti, ideale per portare a spasso il tuo felino in tutta sicurezza.', 'Guinzaglio elastico', 'Accessori');
$product11 = new ProductInfo('https://picsum.photos/200', '18.49$', 'Cane', 'Un set di ciotole in acciaio inossidabile per l\'alimentazione del tuo cane, resistente e igienico.', 'Set di ciotole', 'Accessori');
$product12 = new ProductInfo('https://picsum.photos/200', '3.99$', 'Gatto', 'Un tappetino per la lettiera del tuo gatto, facile da pulire e igienico.', 'Tappetino per lettiera', 'Accessori');
$product13 = new ProductInfo('https://picsum.photos/200', '29.99$', 'Cane', 'Un comodo trasportino per portare il tuo cane in viaggio in tutta sicurezza.', 'Trasportino', 'Accessori');
$product14 = new ProductInfo('https://picsum.photos/200', '7.99$', 'Gatto', 'Un set di giocattoli assortiti per intrattenere il tuo gatto e stimolarne l\'attività fisica.', 'Set di giocattoli assortiti', 'Gioco');
$product15 = new ProductInfo('https://picsum.photos/200', '22.99$', 'Cane', 'Un giubbotto impermeabile per il tuo cane, perfetto per proteggerlo durante le passeggiate sotto la pioggia.', 'Giubbotto impermeabile', 'Accessori');
$product16 = new ProductInfo('https://picsum.photos/200', '10.49$', 'Gatto', 'Una ciotola ergonomica per l\'acqua o il cibo del tuo gatto, comoda e resistente.', 'Ciotola ergonomica', 'Accessori');

$productsArray = 
[
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
    $product7,
    $product8,
    $product9,
    $product10,
    $product11,
    $product12,
    $product13,
    $product14,
    $product15,
    $product16
]
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous'/>
        <link rel="stylesheet" href="style.css">
    <title>PHP-OOP-2</title>
</head>

<body>
    <main class="container d-flex flex-wrap gap-3 mt-5"> 
        <?php foreach($productsArray as $element ): ?>
        <div class="card" style="width: 18rem;">
            <div class="position-relative">
                <?php echo '<img src="'.$element->image.'" class="card-img-top" alt="'.$element->nome.'">';?>
                <?php if($element->animal == 'Cane'):?>
                <svg class="position-absolute move" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="#000000" d="M309.6 158.5L332.7 19.8C334.6 8.4 344.5 0 356.1 0c7.5 0 14.5 3.5 19 9.5L392 32h52.1c12.7 0 24.9 5.1 33.9 14.1L496 64h56c13.3 0 24 10.7 24 24v24c0 44.2-35.8 80-80 80H464 448 426.7l-5.1 30.5-112-64zM416 256.1L416 480c0 17.7-14.3 32-32 32H352c-17.7 0-32-14.3-32-32V364.8c-24 12.3-51.2 19.2-80 19.2s-56-6.9-80-19.2V480c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V249.8c-28.8-10.9-51.4-35.3-59.2-66.5L1 167.8c-4.3-17.1 6.1-34.5 23.3-38.8s34.5 6.1 38.8 23.3l3.9 15.5C70.5 182 83.3 192 98 192h30 16H303.8L416 256.1zM464 80a16 16 0 1 0 -32 0 16 16 0 1 0 32 0z"/>
                </svg>
                <?php else: ?>
                <svg class="position-absolute move" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="#000000" d="M320 192h17.1c22.1 38.3 63.5 64 110.9 64c11 0 21.8-1.4 32-4v4 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V339.2L280 448h56c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-53 0-96-43-96-96V192.5c0-16.1-12-29.8-28-31.8l-7.9-1c-17.5-2.2-30-18.2-27.8-35.7s18.2-30 35.7-27.8l7.9 1c48 6 84.1 46.8 84.1 95.3v85.3c34.4-51.7 93.2-85.8 160-85.8zm160 26.5v0c-10 3.5-20.8 5.5-32 5.5c-28.4 0-54-12.4-71.6-32h0c-3.7-4.1-7-8.5-9.9-13.2C357.3 164 352 146.6 352 128v0V32 12 10.7C352 4.8 356.7 .1 362.6 0h.2c3.3 0 6.4 1.6 8.4 4.2l0 .1L384 21.3l27.2 36.3L416 64h64l4.8-6.4L512 21.3 524.8 4.3l0-.1c2-2.6 5.1-4.2 8.4-4.2h.2C539.3 .1 544 4.8 544 10.7V12 32v96c0 17.3-4.6 33.6-12.6 47.6c-11.3 19.8-29.6 35.2-51.4 42.9zM432 128a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm48 16a16 16 0 1 0 0-32 16 16 0 1 0 0 32z"/>
                </svg>
                <?php endif?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $element->nome?></h5>
                <p class="card-text"><?php echo $element->description?></p>
            </div>
            <div class="border-top p-3 d-flex justify-content-between">
                <?php if($element->tipo == 'Gioco'):?>
                    <span><?php 
                        try {
                            echo $element->setDiscountPrice(20);
                            } catch (Exception $e) {
                            echo 'Eccezione: ' . $e->getMessage();
                            };
                        ?></span>
                <?php else:?>
                    <span><?php echo $element->price?></span>
                <?php endif?>
                <span><?php echo $element->tipo?></span>
            </div>
        </div>
        <?php endforeach?>
    </main>

</body>

</html>