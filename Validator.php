<?php

class Validator {

    static public function string($data,$min = 0, $max = INF) {
        $data = trim($data);

        return  is_string($data) 
                && strlen($data) >= $min 
                && strlen($data) <= $max;
    }
    static public function int($data,$min = 0, $max = INF) {
        return is_int($data) 
        &&$data < $min 
        && $data > $max
};