<?php include("header.html")
?>
<body>
<div class="adm">
<form action="connect.php" method="post">
<br><br>
<label for="name">Student Name: </label>
<input type="text" size="55" name="n" placeholder="Enter your name" required />
<br><br>
<label for="dob">DOB: </label>
<input type="date" name="d" />
<br><br>
<label for="gender">Gender: </label>
<input type="radio" value="male" name="g" />Male
<input type="radio" value="female" name="g" />Female
<input type="radio" value="others" name="g" />Others
<br><br>
<label for="10th">10th Percentage: </label>
<input type="percentage" maxlength="3" name="ten" />
<br><br>
<label for="12th">12th Percentage: </label>
<input type="percentage" maxlength="3" name="twe" />
<br><br>
<label for="dept">Required Dept: </label>
<select name="s">
<option value="EEE">EEE</option>
<option value="CSE">CSE</option>
<option value="IT">IT</option>
<option value="MECH">MECH</option>
<option value="BIO-TECH">BIO-TECH</option>
<option value="BIOMED">BIOMED</option>
</select>
<br><br>
<label for="address">Address: </label>
<input type="varchar" size="100" name="a" />
<br><br>
<label for="mobile">Mobile Number: </label>
<input type="int" size="10" name="m" />
<br><br>
<label for="whatsapp">WhatsApp Number: </label>
<input type="int" size="10" name="w" />
<br><br>

<input type="submit" value="SUBMIT" />
<input type="reset" value="RESET" />
</form>
</div>
</body>
<?php include("footer.html")
?>