<?php

    $arr1 = [1,2,3,4,5];

    $arr2 = [1];

    $arr3 = array_diff($arr1,$arr2);
    $arr4 = array_diff($arr2,$arr1);

echo "<pre>";
print_r($arr3);
print_r($arr4);

