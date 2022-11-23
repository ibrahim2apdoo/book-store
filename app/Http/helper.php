<?php
// start dir() is helper function  that can change direction from right to left

if (!function_exists('direction')){
    function direction(){
        if (session()->has('lang')){
            if ( session('lang')=='ar'){
                return 'rtl';
            }else{
                return 'ltr';
            }
        }else{
            return 'ltr';
        }
    }
}

// end validate image helper function  that can validate extnition
