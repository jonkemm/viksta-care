<?php
$title = "Our services";
include('./php/head.php');
include('./php/nav.php');
session_start();
include('./php/functions.php');
?>
    <h1><a name="#contact"><?=$title?></a></h1>
            <div class="row flex">
                <div class="w-50">
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
                <div class="w-50">
                    <h2>Make enquiry</h2>
                    <form action="send" id="contact-form" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="input-group-text required"><span class="fa fa-user"></span></div>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Full name" />
<?php formField('name') ?>
                        </div>
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
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <input type="hidden" value="services" name="purpose">
                        <div class="input-group">
                            <div class="w-25"><span class="red"> *</span> All fields required</div>
                            <div class="w-75">We will not share your personal information</div>
                        </div>
                    </form>
                </div>
            </div>
<?php
include('./php/footer.php');