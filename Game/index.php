<?php
require '../Header.php';
$page = $lang["game1"];
ob_start();

$file = file("words.db");
$filel = count($file);

$stat = $_SESSION["stat"];
$point = $_SESSION["point"];
$row = $_SESSION["row"];

if (isset($row) == 0) {
    $stat = "--";
    $row = 0;
    $point = 0;
    header("location:" . $_SERVER['HTTP_SELF']);
}

$list = explode("=", $file[$row]);
$chosen_word = $list[0];
$correct_word = $list[1];

// GAME 1 START
$text = strtolower($_POST["t"]);
if ($text != "" && $text != null && $text != " ") {
    if ($text == $correct_word) {
        $_SESSION["row"] ++;
        $_SESSION["stat"] = $lang["correct"];
        $_SESSION["point"] = $_SESSION["point"] + 1;
        echo "<script>window.location.reload(false);</script>";
        header("location:" . $_SERVER['HTTP_SELF']);
    } else if ($text != $correct_word) {
        $_SESSION["stat"] = $lang["wrong"];
        header("location:" . $_SERVER['HTTP_SELF']);
    }
}
// GAME 1 END
?>
<html>
<body>
	<div id="page">
		<div align="center">
			<p><?php echo $lang["g_page_title"];?><br><?php echo $lang["g_page_rule"];?></p>
			<p>
				<a href="../Main"><?php echo $lang["to_normal"];?></a>
			</p>
		</div>
		<form method="post">
			<div class="table">
				<div>
					<div>
						<input name="t" onchange="this.form.submit();" size="" style="padding: 5px;"
							placeholder="<?php echo $chosen_word." ".$lang["g_enter_verb"]; ?>"
							autocomplete="off"></input>
					</div>
				</div>
				<div align="center">
					<p><?php echo "\"".$stat."\"";?></p>
					<p><?php echo $lang["point"].": \"".$point."\"";?></p>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<?php
ob_end_flush();
header("location:" . $_SERVER['HTTP_SELF']);
require '../Footer.php';
?>