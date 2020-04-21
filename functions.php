<?php
    function printArr($myArray){
        foreach($myArray as $number){
        echo $number . '<br>';
        }
    }

    function largest($myArray){
        return max($myArray);
    }

    function removeDups($myArray){
        return array_unique($myArray);
    }

    function distribution($myArray){
        return array_count_values($myArray);
    }

    function printAssoArray($myArray){
        foreach($myArray as $number => $count){
            echo $number . ' => ' . $count . '<br>';
        }
    }