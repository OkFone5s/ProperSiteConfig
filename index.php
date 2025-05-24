<?php

// Proper Site Config Test

use PSC\Config;
include "class/PSC/Config.php";

$Config = new Config(["name" => "Wow! This site sucks."]);

$Config->Property("motto", "Wow! This site is good.");

?>

<html>
    <head>
        <title><?php echo $Config->Property("name")." | ".$Config->Property("motto"); ?></title>
    </head>

    <body>
        <a href="<?php echo $Config::Link("hi.php"); ?>">stuff</a>
        <p>Site under construction, unauthorized.</p>
        <?php $Config::Redirect("hi.php"); ?>
    </body>
</html>
