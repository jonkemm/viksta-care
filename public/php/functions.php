<?php 
function formField($field){
    if(isset($_SESSION['post'][$field])){
        $message = $_SESSION['post'][$field];
        if(isset($message)){
            echo('<div class="error">'.$message.'</div>');
        }
    }
}
function check(){
    // echo $_SESSION['post']['check'];
    if(isset($_SESSION['post']['check'])){
    echo('
    <style>
    #contact-form fieldset{
        border: 3px solid green;
    }
    </style>

    <div class="w4rAnimated_checkmark">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
            <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
            <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
        <p>Thank you for your message.</p>
    </div>
    ');
    unset($_SESSION['post']['check']);
        }
}