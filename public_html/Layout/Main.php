<?php
require_once(__DIR__ . "/../../lib/functions.php");
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "$BASE_PATH",
        //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}
session_start();


?>

<!-- include css and js files -->
<script src="<?php echo get_url('helpers.js'); ?>"></script>

<?php
require(__DIR__ . "/Nav.php");
?>


<?php
    require(__DIR__ . "/../Layout/Header.php");
?>

<?php
    require(__DIR__ . "/../Layout/Footer.php");
?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>