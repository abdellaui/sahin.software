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

?>