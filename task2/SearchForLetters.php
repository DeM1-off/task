<?php


class SearchForLetters
{

    public function selectLetters(string $text) :bool
    {

        $allnumber = strlen($text);
        $anumber =  substr_count($text, 'a');
        $bnumber =  substr_count($text, 'b');

        if (preg_match("/ab/i", $text)) {
            return TRUE;
        } elseif ($allnumber == $anumber OR $allnumber == $bnumber) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}


$a = new SearchForLetters();
var_dump($a->selectLetters('aa')); //TRUE
var_dump($a->selectLetters('assa')); //FALSE
var_dump($a->selectLetters('sddsaab'));  //TRUE
var_dump($a->selectLetters('bbbbb'));  //TRUE
