<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編_16章課題</title>
</head>
<body>
    <p>
        <?php

        class Food{
            Private $name;
            Public $price;

            Public function show_price(int $price){
                $this->price =$price;
            }

            Public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

        }

        class Animal{
            Private $name;
            Public $height;
            Private $weight;

            Public function show_height(int $height){
                $this->height = $height;
            }

            Public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight =$weight;
            }

        }

        $food = new Food("potato", 250);
        $animal = new Animal("dog", 60, 5000);
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";
        
        $food->show_price(250);
        echo $food->price . "<br>";
        $animal->show_height(60);
        echo $animal->height . "<br>";

        ?>
        </p>
    </body>
    </html>



