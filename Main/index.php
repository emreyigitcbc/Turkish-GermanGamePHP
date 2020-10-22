<?php
require '../Header.php';
$page = $lang["dict"];
ob_start();
?>
<html>
<body>
	<div id="page">
		<div align="center">
			<p><?php echo $lang["page_title"];?><br><?php echo $lang["page_rule"];?></p>
			<p>
				<a href="../Game"><?php echo $lang["to_game"];?></a>
			</p>
		</div>
		<form method="post">
			<div class="table">
				<div>
					<div>
						<input type="text" name="text"
							onclick="this.setSelectionRange(0, this.value.length)"
							onchange="this.form.submit();"
							placeholder="<?php echo $lang["enter_verb"]; ?>"
							value="<?php echo $_SESSION["trs"]; ?>"></input>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<?php
// TRANSLATER START
$text = strtolower($_POST["text"]);

if ($text != "") {
    $f = file("dict.db");
    $l = count($f);
    for ($c = 0; $c <= $l; $c ++) {
        $s = explode("=", $f[$c]);
        similar_text($s[0], $text, $pd);
        similar_text($s[1], $text, $pt);
        if ($pd > 80 || $text == $s[0]) {
            $_SESSION["trs"] = $s[1];
            header("location:" . $_SERVER['HTTP_SELF']);
        } else if ($pt > 80 || $text == $s[1]) {
            $_SESSION["trs"] = $s[0];
            header("location:" . $_SERVER['HTTP_SELF']);
        }
    }
}
// TRANSLATER END
ob_end_flush();
require '../Footer.php';
?>