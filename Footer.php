<html>
<body>
	<div class="copy">
		<div style="float: left; position: fixed;">
			<form action="../Langs/" method="post">
				<select name="lang" onchange="this.form.submit();">
					<option value="en"><?php echo $lang["langselect"];?></option>
					<option value="en"
						style="background-image: url(../Assets/Images/en.png);"><?php echo $lang["en"];?></option>
					<option value="tr"
						style="background-image: url(../Assets/Images/tr.png);"><?php echo $lang["tr"];?></option>
					<option value="de"
						style="background-image: url(../Assets/Images/de.png);"><?php echo $lang["de"];?></option>
				</select>
			</form>
		</div>
	</div>
</body>
</html>