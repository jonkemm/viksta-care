
        <header>
<?php
     if( !isset($_COOKIE['cookies']) ) { ?>
		<div id="cookiemessage">
			<input type="button" id="cookie-message-input" class="btn btn primary" value="I'm fine with cookies" />We use cookies on this website.
		</div>
		<!-- <style>
			body{ padding-top: 200px; }
		</style> -->
<?php }?>
            <nav itemscope="http://schema.org/SiteNavigationElement" class="navbar navbar-expand-lg container">
                <div class="container-fluid" itemscope="name">
                    <a class="navbar-brand" href="/" itemscope="url">
                        <img src="./img/viksta-logo-icon.svg" id="logo-icon" alt="Viksta Care Logo" aria-disabled="true" />
                        <div id="logo-name">
                            Viksta<br />
                            <small>Care Ltd</small>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="fa fa-bars"></div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav float-right mb-2 mb-lg-0">
                            <li class="nav-item tel" itemscope="name">
                                <a class="nav-link" itemscope="url" href="tel:07871138679" title="Call us on 07871 138679"><small>Call us </small>07871 138679</a>
                            </li>
                            <li class="nav-item" itemscope="name"><a class="nav-link" itemscope="url" href="./about">About</a></li>
                            <li class="nav-item" itemscope="name">
                                <a class="nav-link" href="./services" itemscope="url"><button class="nav-link btn btn-warning">Our services</button></a>
                            </li>
                            <li class="nav-item" itemscope="name"><a class="nav-link" itemscope="url" href="./careers">Join us</a></li>
                            <li class="nav-item" itemscope="name"><a class="nav-link" itemscope="url" href="./contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="container">
