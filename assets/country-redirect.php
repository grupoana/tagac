<?php
require_once "$basePath/assets/vendor/geoplugin/geoplugin.class.php";

$geoplugin = new geoPlugin();
$geoplugin->locate();

$countryCode = $geoplugin->countryCode;

if (!isset($_COOKIE['prefCountry'])) {
    setcookie('prefCountry', $countryCode, time() + 3600 * 24 * 365, '/');
}

$prefCountry = $_COOKIE['prefCountry'];

    if (($prefCountry == 'US') && ($lang == 'es')) {
        header("Location: https://www.tagac.com.mx/en/$salesRef");
        exit();
    } else if (($prefCountry == 'MX') && ($lang == 'en')) {
        header("Location: https://www.tagac.com.mx/$salesRef");
        exit();
    } else  if (($prefCountry != 'MX') && ($prefCountry != 'US')){
        header("Location: https://www.tagac.com.mx/$salesRef");
        exit();
    }
?>