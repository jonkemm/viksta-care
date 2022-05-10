<?php
$title = "Viksta Care Ltd";
include('./php/head.php');
include('./php/nav.php');
?>
<section id="home">
    <div class="row">
        <h1>
            Caring at home
            <p>Your loved ones are in good hands with Viksta Care Ltd</p>
        </h1>
    </div>
</section>
<section id="assessment">
    <div class="row">
        <div class="w-50">
            <h2>Free assessment</h2>
            <p>Leave us your information and we will advise you without obligation.</p>
        </div>
        <div class="w-50">
            <form action="">
                <div class="input-group">
                    <div class="input-group-text"><span class="fa fa-user"></span></div>
                    <input class="form-control" type="text" id="name" placeholder="Full name" />
                </div>
                <div class="input-group">
                    <div class="input-group-text"><span class="fa fa-envelope"></span></div>
                    <input class="form-control" type="email" id="email" placeholder="Email" />
                </div>
                <div class="input-group">
                    <div class="input-group-text"><span class="fa fa-phone"></span></div>
                    <input class="form-control" type="text" id="phone" placeholder="Phone" />
                </div>
                <div class="input-group">
                    <div class="input-group-text"><span class="fa fa-map-marker"></span></div>
                    <input class="form-control" type="text" id="postcode" placeholder="Postcode" />
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
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