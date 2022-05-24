<?php
$title = "Home care in Bradford";
$description = "Viksta Care Ltd, Homecare in Bradford, West Yorkshire, UK";
$keywords = "Viksta Care Ltd, Homecare, Bradford, West Yorkshire, UK";
include('./php/head.php');
include('./php/nav.php');
session_start();
include('./php/functions.php');
include('./php/deets.php');
?>
            <ul id="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                <li property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="https://vikstacare.co.uk"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                </li>
                <li property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="vikstacare.co.uk/contact/"><span property="name">Contact</span></a>
                    <meta property="position" content="2">
                </li>
            </ul>
            <section id="home">
                <div class="row">
                    <h1>
                        Caring at home
                    </h1>
                    <p>Your loved ones are in good hands with Viksta Care Ltd</p>
                </div>
            </section>
            <section id="assessment">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Free assessment</h2>
                        <p>Leave us your information and we will advise you without obligation.</p>
                    </div>
                    <div class="col-sm-6">
                        <form action="send" id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-text"><span class="fa fa-user"></span></div>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Full name" />
<?php formField('name') ?>
                            </div>
                            <div class="input-group">
                                <div class="input-group-text"><span class="fa fa-envelope"></span></div>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" />
<?php formField('email') ?>
                            </div>
                            <div class="input-group">
                                <div class="input-group-text"><span class="fa fa-phone"></span></div>
                                <input class="form-control" type="text" name="tel" id="tel" placeholder="Phone" />
<?php formField('tel') ?>
                            </div>
                            <div class="input-group">
                                <div class="input-group-text"><span class="fa fa-map-marker"></span></div>
                                <input class="form-control" type="text" name="postcode" id="postcode" placeholder="Postcode" />
<?php formField('postcode') ?>
                            </div>
<?php check(); ?>
                            <div class="input-group">
                                <p><span class="red"> *</span> All fields required</p>
                            </div>
                            <input type="hidden" value="index" name="purpose">
                            <!-- <input class="btn btn-primary form-control" type="submit" value="Send" /> -->
                            <button class="g-recaptcha btn btn-primary form-control" 
                                            data-sitekey="<?php echo $RECAPTURE_PUBLIC_KEY?>"" 
                                            data-callback='onSubmit' 
                                            data-action='submit'>Submit</button>
                            <p>We will not share your personal information and aim to get back to your email the same working day</p>
                        </form>
                    </div>
                </div>
            </section>
            <section id="recruitment">
                <h2>Work with us</h2>
                <p>If you'd like work with us</p>
            </section>
<?php
include('./php/footer.php');