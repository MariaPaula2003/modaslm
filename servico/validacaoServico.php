<?php

function vali_preenchido($var){
    if (strlen(trim($var)) == 0) {
    return "Este campo é obrigatório.";
}   
}

function vali_num($var){
    $input['$var'] = filter_var($var, FILTER_VALIDATE_INT);
    if ($input['$var'] == FALSE) {
    return 'Informe um valor numérico.';
}
}

function vali_email($email){
   $input['$email'] = filter_var($email, FILTER_SANITIZE_EMAIL);
     if ($input['$email'] == FALSE) {
    return 'Informe um email válido.';
}
}






