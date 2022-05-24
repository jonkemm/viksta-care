<?php
$title = "Contact Viksta Care Ltd";
$description = "Contact Viksta Care Ltd, call VistaCare, or email us";
$keywords = "Contact, Viksta Care Ltd, call VistaCare, email viksta care";
include('./php/head.php');
include('./php/nav.php');
session_start();
include('./php/functions.php');
include('./php/deets.php');
?>

<script type="application/ld+json">
         {         
            "@context": "https://schema.org/",         
            "@type": "LocalBusiness",         
            "@id": "#LocalBusiness",         
            "url": "https://vikstacare.co.uk",          
            "legalName": "Viksta Care Ltd",
            "name": "Viksta Care Ltd",
            "description": "",
            "logo": "https://vikstacare.co.uk/img/viksta-logo-icon.svg",
            "telephone": "07871138679",
            "email": "contact@vikstacare.co.uk",
            "address": {             
              "@type": "PostalAddress",             
              "streetAddress": "19 Sowden Street",            
              "addressLocality": "Bradford",             
              "addressRegion": "West Yorkshire",             
              "addressCountry": "GBR",             
              "postalCode": "BD73LX"        
             }
          } 
      </script>
      
    <ul id="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="https://vikstacare.co.uk"><span property="name">Home</span></a>
            <meta property="position" content="1">
        </li> > 
        <li property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" href="vikstacare.co.uk/contact/"><span property="name">Contact</span></a>
            <meta property="position" content="2">
        </li>
    </ul>
    <h1><?=$title?></h1>
    <div class="row">
        <div class="col-sm-6">
            <h3>Owner</h3>
            <p>Vicky Slater, owner of Viksta Care Ltd. Company no. 14013182</p>
            <h3>
                <i class="fa fa-map-marker" title="Phone"></i>
                Address
            </h3>
            <address>
                Viksta Care Ltd<br />
                19 Sowden Street<br />
                Bradford<br />
                BD7 3LX
            </address>
            <h3>
                <i class="fa fa-share-square-o" aria-hidden="true"></i>
                Tel / Social
            </h3>
            <ul class="social">
                <li>
                    <a href="tel:07871138679"><i class="fa fa-phone" title="Phone" aria-hidden="true"></i> 07871 138679</a>
                </li>
                <li>
                    <a href="https://wa.me/07871138679"><i class="fa fa-whatsapp" title="Whatsapp" aria-hidden="true" target="blank"></i> Whatsapp</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/vikstacare/" target="_blank">
                        <i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i>
                        Instagram
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/Viksta-care-ltd-105372088809240/" target="_blank">
                        <i class="fa fa-facebook" title="Facebook" aria-hidden="true"></i>
                        Facebook
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-6">
            <h2>Message us</h2>
            <form action="send" id="contact-form" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Contact us</legend>
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
                    <input type="hidden" value="contact" name="purpose">
                    <!-- <input class="btn btn-primary form-control" type="submit" value="Send" /> -->
                    <button class="g-recaptcha btn btn-primary form-control" 
                        data-sitekey="<?php echo $RECAPTURE_PUBLIC_KEY?>"
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button>
                    <p>We will not share your personal information and aim to get back to your email the same working day</p>
                </fieldset>
            </form>
        </div>
    </div>
<?php
unset( $_SESSION['post'] );
include('./php/footer.php');