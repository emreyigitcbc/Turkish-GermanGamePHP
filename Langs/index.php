<?php
$lang = $_POST["lang"];

if ($lang == "tr") {
    header("location: language.php?lang=tr");
} else if ($lang == "en") {
    header("location: language.php?lang=en");
} else if ($lang == "de") {
    header("location: language.php?lang=de");
}

?>
