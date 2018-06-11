<?php

$friends = collect([
    ['first_name' => 'Rachel', 'last_name' => 'Green'],
    ['first_name' => 'Monica', 'last_name' => 'Geller'],
    ['first_name' => 'Phoebe', 'last_name' => 'Buffay'],
    ['first_name' => 'Joey', 'last_name' => 'Tribbiani'],
    ['first_name' => 'Chandler', 'last_name' => 'Bing'],
    ['first_name' => 'Ross', 'last_name' => 'Geller'],
]);


$filtered = $friends->whereIn('first_name', ['Monica', 'Chandler']);

$filtered->all();

/*
[
     1 => [
       "first_name" => "Monica",
       "last_name" => "Geller",
     ],
     4 => [
       "first_name" => "Chandler",
       "last_name" => "Bing",
     ],
   ]


*/