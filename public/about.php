<?php
$title = "About Viksta Care Ltd";
$description = "About Viksta Care Ltd"; 
$keywords = "About, Viksta Care Ltd";
include('./php/head.php');
include('./php/nav.php');
?>
<ul id="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
    <li property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" href="https://vikstacare.co.uk"><span property="name">Home</span></a>
        <meta property="position" content="1">
    </li> > 
    <li property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" href="vikstacare.co.uk/about/"><span property="name">About</span></a>
        <meta property="position" content="2">
    </li>
</ul>
<h1><?=$title?></h1>
<div class="row flex">
    <div class="col-3">
        <h2>Our team</h2>
        <img src="./img/vicky-slater-owner-viksta-care-ltd.webp" alt="Vicky Slater" class="img-fluid img-thumbnail" />
        <p>Vicky Slater is the registered owner and manager with over 20 years’ experience working in health and social care including dementia and palliative care. DBS checked.</p>
    </div>
    <div class="col-9">
        <h2>Viksta care provides the following services:</h2>
        <ul>
            <li>All personal cares includinng bath/shower, nail care, continence care, etc.</li>
            <li>Mobility needs from assistance with walking to hoisting.</li>
            <li>Lunch and tea visits, light meals and medication prompts.</li>
            <li>Visits to your GP, hospital appointments, dentist, hairdressers, etc.</li>
            <li>Shopping trips to the local store, supermarket, pharmacy, etc.</li>
            <li>House cleans, regular cleans or specific occasions.</li>
            <li>Sit in’s including personal care, housework including laundry. Based on a 6 hour session.</li>
            <li>Sleeps, depend on availability of staff due to covid guidelines.</li>
        </ul>
    </div>
</div>
<?php
include('./php/footer.php');