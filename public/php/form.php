
            <form id="contact-form" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend><h2>Contact us</h2></legend>
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
                    <input class="btn btn-primary form-control" onclick="send()" type="button" value="Send" />
                    <p>We will not share your personal information and aim to get back to your email the same working day</p>
                </fieldset>
            </form>