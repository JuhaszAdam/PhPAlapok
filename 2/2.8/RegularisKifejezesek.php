<?php

alapok();
emailVizsgalas();
telefonszamVizsgalas();
bankszamlaszamVizsgalat();
hashVizsgalat();
tombVizsgalas();

function alapok()
{
    $a = "abcASDdeABASDCDE12ASD345";
    echo "alap:  ";
    kiir($a);
    $a = preg_replace('#ASD#', '', $a);
    echo "ASD kitörölve:  ";
    kiir($a);
    $a = preg_replace('#[b-d]#', '', $a);
    echo "Kisbetűk b-től d-ig kitörölve:  ";
    kiir($a);
    if (preg_match('#123#', $a)) {
        echo "Tartalmazza az '123' mintát";
    } else {
        throw new Exception("Valami hiba történt!");
    }
    echo PHP_EOL;
    echo PHP_EOL;
}

function kiir($a)
{
    echo $a . PHP_EOL;
}

function emailVizsgalas()
{
    $emailLista = [
        "juhasz.adam@virgo.hu",
        "Foo@Bar.com",
        "foo2@bar2.com",
        "hibas:email.cim",
    ];

    foreach ($emailLista as $email) {
        if (preg_match('#[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}#', $email)) {
            echo $email . " - OK!" . PHP_EOL;
        } else {
            echo $email . " -  HIBÁS!" . PHP_EOL;
        }
    }
    echo PHP_EOL;
}

function telefonszamVizsgalas()
{
    $telefonszamLista = [
        '06-30-123-4567',
        '06 30 123 4567',
        '+36-30-123-4567',
        '+36 30 123 4567',
        '30 123 4567',
        '06301234567',
        '06301234567',
        '+36301234567',
        '(123) 456 7890',
        '(123)-456-7890',
        '(123).456.7890',
        '12345',
        '06 30 123 456x',
        'callmemaybe'
    ];

    foreach ($telefonszamLista as $telefonszam) {
        if (preg_match('#\(?([0-9]{2})\)?([ .-]?)([0-9]{3})\2([0-9]{4})#', $telefonszam)) {
            echo $telefonszam . " - OK!" . PHP_EOL;
        } else {
            echo $telefonszam . " -  HIBÁS!" . PHP_EOL;
        }
    }
    echo PHP_EOL;
}

function bankszamlaszamVizsgalat()
{
    $bankszamlak = [
        '4111111111111111',
        '4012888888881881',
        '4222222222222',
        '5555555555554444',
        '5105105105105100',
        '378282246310005',
        '371449635398431',
        '378734493671000',
        '30569309025904',
        '38520000023237',
        '6011111111111117',
        '6011000990139424',
        '3530111333300000',
        '3566002020360505',
        '112979812758912748912749857189259218',
        'gimmemoney'
    ];

    foreach ($bankszamlak as $szamla) {
        $result = " - HIBÁS!";

        if (preg_match('#^4[0-9]{12}(?:[0-9]{3})?$#', $szamla)) {
            $result = "- OK! -> VISA";
        }
        if (preg_match('#5[1-5][0-9]{14}#', $szamla)) {
            $result = "- OK! -> MasterCard";
        }
        if (preg_match('#3[47][0-9]{13}#', $szamla)) {
            $result = "- OK! -> American Express";
        }
        if (preg_match('#3(?:0[0-5]|[68][0-9])[0-9]{11}#', $szamla)) {
            $result = "- OK! -> Diners Club";
        }
        if (preg_match('#6(?:011|5[0-9]{2})[0-9]{12}#', $szamla)) {
            $result = "- OK! -> Discover";
        }
        if (preg_match('#(?:2131|1800|35\d{3})\d{11}#', $szamla)) {
            $result = "- OK! -> JCB";
        }

        echo $szamla . $result . PHP_EOL;
    }
    echo PHP_EOL;
}

function hashVizsgalat()
{
    $hashek = [
        password_hash('password', PASSWORD_BCRYPT),
        password_hash('password2', PASSWORD_BCRYPT),
        password_hash('password3', PASSWORD_BCRYPT),
        '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a',
        '$2a$10$TwentytwocharactersaltThirtyonecharacterspasswordhash',
        '$$2a$10$TwentytwocharactersaltThirtyonecharacterspasswordhash',
        '$2y$10$.vGA1O9wmRjrwAVVAGv3Fykk1a',
        'engedjbe'
    ];

    foreach ($hashek as $hash) {
        if (preg_match('#^(\$[a-z0-9]{2}){2}\$[a-zA-Z0-9./]{53}#', $hash)) {
            echo $hash . " - OK!" . PHP_EOL;
        } else {
            echo $hash . " -  HIBÁS!" . PHP_EOL;
        }
    }
    echo PHP_EOL;
}


function tombVizsgalas()
{
    $emailLista = [
        "juhasz.adam@virgo.hu",
        "hibas:email.cim",
        "Foo@Bar.com",
        "hibas:email.cim",
        "foo2@bar2.com",
        "hibas:email.cim",
    ];

    $validEmailLista = preg_grep('#[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}#', $emailLista);

    echo 'Valid E-mail-ek:'. PHP_EOL;
    foreach ($validEmailLista as $email) {
            echo $email . PHP_EOL;
    }
    echo PHP_EOL;
}
