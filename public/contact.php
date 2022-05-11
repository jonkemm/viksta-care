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
            <p>
                <a href="tel:07871138679"><i class="fa fa-phone" title="Phone"></i> 07871 138679</a>
            </p>
            <p>
                <a href="https://wa.me/07871138679"><i class="fa fa-whatsapp" title="Whatsapp" target="blank"></i> Whatsapp</a>
            </p>
        </div>
        <div class="w-50">
            <form action="send" id="contact-form" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <div class="input-group-text required"><span class="fa fa-map-marker"></span></div>
                    <select class="form-control" name="origin" required id="origin">
                        <option value="">What brought you here?</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Word of mouth">Word of mouth</option>
                        <option value="Local shop">Local shop</option>
                        <option value="Google">Google</option>
                        <option value="Paper / magalog">Paper / magazine</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="input-group">
                    <div class="input-group-text required"><span class="fa fa-user"></span></div>
                    <input class="form-control" type="text" required id="name" name="name" placeholder="Full name" />
                </div>
<?php formField('name') ?>
                <div class="input-group">
                    <div class="input-group-text required"><span class="fa fa-envelope"></span></div>
                    <input class="form-control" type="email" required id="email" name="email" placeholder="Email" />
                </div>
<?php formField('email') ?>
                <div class="input-group">
                    <div class="input-group-text required"><span class="fa fa-sticky-note-o"></span></div>
                    <textarea class="form-control" rows="4" required id="message" name="message" placeholder="Message"></textarea>
                </div>
<?php formField('message') ?>
<?php check(); ?>
                <div class="input-group">
                    <p><span class="red"> *</span> All fields required</p>
                </div>
                <input type="hidden" value="index" name="purpose">
                <input class="btn btn-primary form-control" type="submit" value="Send" />
                <p>We will not share your personal information and aim to get back to your email the same working day</p>
            </form>
        </div>
    </div>
<?php
unset( $_SESSION['post'] );
include('./php/footer.php');