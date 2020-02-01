<?php
function randomize($isi) {
    if(preg_match("/[a-z]/",$isi)) {
        return str_shuffle($isi);
    } else {
        return "Harus terdapat parameter dan harus string!";
    }
}
echo randomize("Rezky Putra Akkif");
