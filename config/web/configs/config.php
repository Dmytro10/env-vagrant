<?php
/*
 * Configuration file for production
 */
if ($_SERVER['PHP_SELF'] === __FILE__) {
    die("You can't run this script directly!");
}

/*
 * Other params
 */
return array(
    'domain' => '/',
);
