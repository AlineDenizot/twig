<?php

$products = [
    [
        'name' => 'Tome 1', 
        'description' => 'Passé décomposé', 
        'image' => [
            'url'=> '../media/tome1.jpg', 
            'alt'=> 'Couverture du tome 1'
        ]
    ],
    [
        'name' => 'Tome 2', 
        'description' => 'Cette vie derière nous',
        'image' => [
            'url'=> '../media/tome2.jpg', 
            'alt'=> 'Couverture du tome 2'
        ]
    ],
    [
        'name' => 'Tome 3', 
        'description' => 'Sains et saufs ?',
        'image'=> [
            'url'=> '../media/tome3.jpg', 
            'alt'=> 'Couverture du tome 3'
        ]
    ],
    [
        'name' => 'Tome 4', 
        'description' => 'Amour et mort',
        'image'=> [
            'url'=> '../media/tome4.jpg', 
            'alt'=> 'Couverture du tome 4'
        ]
    ],
    [
        'name' => 'Tome 5', 
        'description' => 'Monstrueux',
        'image'=> [
            'url'=> '../media/tome5.jpg', 
            'alt'=> 'Couverture du tome 5'
        ]
    ],
    [
        'name' => 'Tome 6', 
        'description' => 'Vengeance',
        'image'=> [
            'url'=> '../media/tome6.jpg', 
            'alt'=> 'Couverture du tome 6'
        ]],
    [
        'name' => 'Tome 7', 
        'description' => 'Dans l\'oeil du cyclone',
        'image'=> [
            'url'=> '../media/tome7.jpg', 
            'alt'=> 'Couverture du tome 7'
        ]],
];

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);

echo $twig->render('index.html.twig', ['products' => $products]);


