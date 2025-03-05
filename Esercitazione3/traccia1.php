<?php

$Pippo = [4,7,9,8,2,];

$result = array_map(function ($el){
    return $el*2;
}, $Pippo

);


print_r ($result);
