<?php

function cronTypes($index = NULL){
     $types = array(
        1 => 'PHP',
        2 => 'cURL',
        3 => 'Wget',
     );

     return ($index) ? $types[$index] : $types;
}



