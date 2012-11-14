<?php

    function fNoDate($sDate) {
        $sDate = str_replace("Monday",    "Mandag",   $sDate);
        $sDate = str_replace("Tuesday",   "Tirsdag",  $sDate);
        $sDate = str_replace("Wednesday", "Onsdag",   $sDate);
        $sDate = str_replace("Thursday",  "Torsdag",  $sDate);
        $sDate = str_replace("Friday",    "Fredag",   $sDate);
        $sDate = str_replace("Saturday",  "Lørdag",   $sDate);
        $sDate = str_replace("Sunday",    "Søndag",   $sDate);
        $sDate = str_replace("January",   "Januar",   $sDate);
        $sDate = str_replace("February",  "Februar",  $sDate);
        $sDate = str_replace("March",     "Mars",     $sDate);
        $sDate = str_replace("May",       "Mai",      $sDate);
        $sDate = str_replace("June",      "Juni",     $sDate);
        $sDate = str_replace("July",      "Juli",     $sDate);
        $sDate = str_replace("October",   "Oktober",  $sDate);
        $sDate = str_replace("December",  "Desember", $sDate);
        return $sDate;
    }

?>
