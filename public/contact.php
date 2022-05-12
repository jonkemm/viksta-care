<?php
$title = "Contact Viksta Care Ltd";
$description = "Contact Viksta Care Ltd, call VistaCare, or email us";
$keywords = "Contact, Viksta Care Ltd, call VistaCare, email viksta care";
include('./php/head.php');
include('./php/nav.php');
session_start();
include('./php/functions.php');
?>
    <h1><a name="#contact"><?=$title?></a></h1>
    <div class="row">
        <div class="w-50">
            <p>Vicky Slater, Viksta Care Ltd</p>
            <p>
                <a href="tel:07871138679"><i class="fa fa-phone" title="Phone"></i> 07871 138679</a>
            </p>
            <p>
                <a href="https://wa.me/07871138679"><i class="fa fa-whatsapp" title="Whatsapp" target="blank"></i> Whatsapp</a>
            </p>
        </div>
        <div class="w-50">
<?php
include('./php/form.php');
?>
        </div>
    </div>
<?php
unset( $_SESSION['post'] );
include('./php/footer.php');