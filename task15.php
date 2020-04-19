<?php

$basket = [
    [
        'position' => 'книга по php',
        'quantity' => 1,
    ],
    [
        'position' => 'мышь беспроводная',
        'quantity' => 12,    
    ],
    [
        'position' => 'dell',
        'quantity' => 152,
    ]
];

function countBasket($a) 
{
    $quantity = 0;
    {
        foreach($a as $item){
            $quantity += $item['quantity'];
        }
    }
    return $quantity;
}

$summ = countBasket($basket);

echo $summ;