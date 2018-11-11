<?php

function stringsRearrangement($inputArray) {

    $pc_permute = function($items, $perms = array( )) use ( &$pc_permute )
    {
        if (empty($items)) {
            $return = array($perms);
        }  else {
            $return = array();
            for ($i = count($items) - 1; $i >= 0; --$i) {
                 $newitems = $items;
                 $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
                 array_unshift($newperms, $foo);
                 $return = array_merge($return, $pc_permute($newitems, $newperms));
             }
        }
        return $return;
    };



    $differby = function ($word1, $word2) {
        $count = 0;
        for ($i=0; $i < strlen($word1); $i++) {
            if ($word1[$i] !== $word2[$i]) {
                $count++;
            }
        }
        return $count;
    };


    $permuted = $pc_permute($inputArray);
    foreach ($permuted as $arr) {
        $count = 0;
        for ($i=0; $i < count($arr) -1 ; $i++) {
            if ( $differby($arr[$i], $arr[$i + 1]) > 1) {
                break;
            } else {
                $count++;
            }
        }
        if ($count  == (count($arr) - 1)) {
            return true;
        }
    }
    unset($differby);
    unset($pc_permute);
    return false;
}


$inputArray = ['aa', 'bb','ba'];
echo stringsRearrangement($inputArray);











 ?>