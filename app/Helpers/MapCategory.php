<?php

if (! function_exists('mapCategory')) {
    function mapCategory(int $number)
    {
        switch ($number) {
            case '1':
                return "Zakupy";
            case '2':
                return "Edukacja";
            case '3':
                return "Zdrowie";
            case '4':
                return "Rekreacja";
            case '5':
                return "Komunikacja";
            case '6':
                return "Rozrywka";
        }
    }
}
