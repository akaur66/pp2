<?php
    function printArr($myArray){
        foreach($myArray as $number){
        echo $number . '<br>';
        }
    }

    function largest($myArray){
        echo max($myArray);
    }