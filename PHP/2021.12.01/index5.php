<?php

$books = ['title', 'author', 'year', 'genre'];

$books = [
            'title' => [
                'Thus Spoke Zarathustra', 'A Wild Sheep Chase', 'Cats Cradle',
            ],
            'author' => [
                '   Friedrich Nietzsche', ' Haruki Murakami', '  Kurt Vonnegut'
            ],
            'year' => [
                '1883', '1982', '1963'
            ],
            'genre' => [
                'Philosophical fiction ', '  Surreal novel', 'Novel'
    ]
];

var_dump($books);

function arrayToTable($books)
{
    echo '<table>';

    foreach ($books as $key=>$value) {
        echo '<th>'.$key.'</th>';
    }

    foreach ($books as $value) {
        echo '<tr>';
        foreach ($value as $element) {
            echo '<td>'.$element.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';}

var_dump(arrayToTable($books));


function average($books)
{
    return round(array_sum($books['year']) / count($books['year']));
}
var_dump(average($books));