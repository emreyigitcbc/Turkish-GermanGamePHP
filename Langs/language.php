<?php
session_start();
$lang = strip_tags($_GET["lang"]);
if ($lang == "tr" || $lang == "en" || $lang == "de") {
    $_SESSION["lang"] = $lang;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "");
} else {
    header("Refresh=0; url=http://localhost/Salaruz X Theme");
}
?>