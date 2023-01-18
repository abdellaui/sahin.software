<?php
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('(c) 2023-' . date("Y") . ' by Abdullah Sahin @ https://sahin.uk/. All rights reserved.');
    exit;
}

session_start();

#############################
# PROJECT DETAILS
#############################

function getProjectName(){
    return 'sahin';
}

function getProjectURL(){
    return 'https://' . getProjectName() . '.software/';
}

function getMail($suffix){
    $mail = $suffix . '@' . getProjectName() . '.software';

    return '<a href="mailto:' . $mail . '">' . $mail . '</a>';
}

function getTelefonNumber(){
    $tel = '+49 234 60 29 182';
    return '<a href="tel:' . $tel . '">' . $tel . '</a>';
}

?>