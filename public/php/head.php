<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?> | Viksta Care Ltd</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?=$description?>">
        <meta name="keywords" content="<?=$keywords?>">
        <meta property="og:title" content="<?=$title?> | Vistacare Ltd" />
        <meta property="og:description" content="<?=$description?>" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/jk.css" />
        <link rel="stylesheet" href="css/animation.css" />
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $RECAPTURE_PUBLIC_KEY?>"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("contact-form").submit();
            }
        </script>
        <script src="js/jk.js"></script>
     </head>
<body>