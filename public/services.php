<?php
$title = "Our services";    
$description = "Our services";
$keywords = "Our services";
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
                </li> > 
                <li property="itemListElement" typeof="ListItem">
                    <a property="item" typeof="WebPage" href="vikstacare.co.uk/services/"><span property="name">Services</span></a>
                    <meta property="position" content="2">
                </li>
            </ul>
            <h1><?=$title?></h1>
            <div class="row flex">
                <div class="col-sm-6">
                    <h2>Prices</h2>
                    <h3>Carers</h3>
                    <p>£20 per hour, per person, currently max 2 carers</p>
                    <p>This will cover your personal care needs and prompts, continence care needs (if required), medication prompts/administration, meal preparation and assistance, mobility needs including hoist/stand aid requirements</p>
                    <h3>Shopping</h3>
                    <p>£12 hourly</p>
                    <h3>Days out</h3>
                    <p>Prices vary depending on your care needs</p>
                    <h3>Sit in’s</h3>
                    <p>£20 to £40 an hour based on all care needs, you may require by one or two carers (if you need double for personal care calls)</p>
                    <h3>Housework</h3>
                    <p>£15 an hour if supplying your own cleaning products, £17 if we supply them. This includes weekly deep cleans (can be more frequently if needed), laundry and general housework</p>
                </div>
                <div class="col-sm-6">
                    <h2>Make an enquiry</h2>
                    <form action="send" id="contact-form" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend><h2>Our services</h2></legend>
                            <div class="input-group">
                                <div class="input-group-text required"><span class="fa fa-user"></span></div>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Full name" />
                            </div>
<?php formField('name') ?>
                            <div class="input-group">
                                <div class="input-group-text required"><span class="fa fa-heart"></span></div>
                                <select class="form-control" id="whom" name="whom" aria-required="true" aria-invalid="false">
                                    <option value="">Who is the care for?</option>
                                    <option value="I need care for myself">I need care for myself</option>
                                    <option value="I need care for someone else">I need care for someone else</option>
                                </select>
<?php formField('whom') ?>
                            </div>
                            <div class="input-group">
                                <div class="input-group-text required"><span class="fa fa-envelope"></span></div>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" />
                            </div>
<?php formField('email') ?>
                            <div class="input-group">
                                <div class="input-group-text"><span class="fa fa-phone"></span></div>
                                <input class="form-control" type="text" name="tel" id="phone" placeholder="Phone" />
                            </div>
<?php formField('tel') ?>
                            <div class="input-group">
                                <div class="input-group-text"><span class="fa fa-map-marker"></span></div>
                                <input class="form-control" type="text" name="postcode" id="postcode" placeholder="Postcode" />
                            </div>
<?php formField('postcode') ?>
                            <div class="input-group">
                                <div class="input-group-text required"><span class="fa fa-sticky-note"></span></div>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Could you please give us some details about the level of care needed?"></textarea>
                            </div>
<?php formField('message') ?>
<?php check(); ?>
                            <!-- <button class="btn btn-primary w-100" type="submit">Submit</button> -->
                            <button class="g-recaptcha btn btn-primary form-control" 
                                data-sitekey="<?php echo $RECAPTURE_PUBLIC_KEY?>"" 
                                data-callback='onSubmit' 
                                data-action='submit'>Submit</button>
                            <input type="hidden" value="services" name="purpose">
                            <div class="input-group">
                                <div class="w-25"><span class="red"> *</span> All fields required</div>
                                <div class="w-75">We will not share your personal information</div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
<?php
include('./php/footer.php');