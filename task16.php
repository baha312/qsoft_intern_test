<?php

$data = [
 
1 => [
 
'name' => 'Александр Сергеевич',
 
'born' => '1799',
 
'email' => 'arap@pushkin.ru',
 
'books' => [
[
'title' => 'Лукоморье',
'creat' => '1829'
],
[
'title' => 'Царь Салтан',
'creat' => '1832'
]
]
],
 
2 => [
'name' => 'Лев Николаевич',
'born' => '1828',
'email' => 'lev@tolstoi.ru',
'books' => [
[
'title' => 'Детство',
'creat' => '1852'
],
[
'title' => 'Война и мир',
 
'creat' => '1863'
 
]
 
]
 
],
 
3 => [
 
'name' => 'Николай Васильевич',
 
'born' => '1809',
 
'email' => 'gogol@mogol.ru',
 
'books' => [
 
[
 
'title' => 'Вий',
 
'creat' => '1835'
 
]
 
]
 
]
 
];

echo '=== Книги ===' . "\n";

foreach ($data as $author) {
    foreach ($author['books'] as $book) {
        echo $book['title'] . " - " . $author['name'] . " - " . $book['creat'] . "\n";
}
}


echo "\n===Авторы====\n";
foreach ($data as $author) {
    echo $author['name'] . " - " . $author['email'] . " - " . $author['born'] . "\n";
}

?>