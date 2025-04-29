<?php

if (! function_exists('roomStatusBadge')) {
    function roomStatusBadge(int $number)
    {
        switch ($number) {
            case '1':
                return '<div class="offer-list-box__status offer-list-box__status--dostepny">Dostępne</div>';
            case '2':
                return '<div class="offer-list-box__status offer-list-box__status--rezerwacja">Rezerwacja</div>';
            case '3':
                return '<div class="offer-list-box__status offer-list-box__status--sprzedany">Sprzedane</div>';
            case '4':
                return '<div class="offer-list-box__status offer-list-box__status--sprzedany">Wynajęte</div>';
        }
    }
}
