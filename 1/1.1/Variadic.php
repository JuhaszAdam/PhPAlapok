<?php
kiir("Egy", "Ketto", "Harom", "Negy");

function kiir(...$szavak)
{
    foreach ($szavak as $szo) {
        echo $szo . " ";
    }
}
