<?php

// Proper Site Config Test

use PSC\Config;
include "class/PSC/Config.php";

$Config = new Config("My cool site", "Stuff", "https://joe.com/");

?>

<html>
    <head>
        <title><?php echo $Config::Name()." | ".$Config::Motto(); ?></title>
    </head>

    <body>
        <a href="<?php echo $Config::Link("hi.php"); ?>">stuff</a>
        <p>Site under construction, unauthorized.</p>
        <?php $Config::Redirect("hi.php"); ?>
    </body>
</html>