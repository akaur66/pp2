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