<html>
<head>
<title>My Form</title>
</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />


Belum punya akun klik <a href ="">disini</a>.

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>