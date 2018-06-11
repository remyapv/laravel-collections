<?php

$friends = collect([
    ['first_name' => 'Rachel', 'last_name' => 'Green', 'fav_rank' => 2],
    ['first_name' => 'Monica', 'last_name' => 'Geller', 'fav_rank' => 1],
    ['first_name' => 'Phoebe', 'last_name' => 'Buffay', 'fav_rank' => 4],
    ['first_name' => 'Joey', 'last_name' => 'Tribbiani', 'fav_rank' => 3],
    ['first_name' => 'Chandler', 'last_name' => 'Bing', 'fav_rank' => '1'],
    ['first_name' => 'Ross', 'last_name' => 'Geller', 'fav_rank' => '2'],
]);


$filtered = $friends->where('fav_rank', 1);

$filtered->all();

/*
[
     1 => [
       "first_name" => "Monica",
       "last_name" => "Geller",
       "fav_rank" => "1",
     ],
     4 => [
       "first_name" => "Chandler",
       "last_name" => "Bing",
       "fav_rank" => "1",
     ],
   ]

*/


$filtered = $friends->whereStrict('fav_rank', 1);

$filtered->all();

/*

[
     1 => [
       "first_name" => "Monica",
       "last_name" => "Geller",
       "fav_rank" => 1,
     ],
   ]


 */
