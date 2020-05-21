<html>
<head>
<title>My Form</title>
</head>
<body>


<?php echo form_open('index.php/form'); ?>


<h5>Username</h5>
<?php echo form_error('username'); ?>
<input type="text" name="username" value="<?php echo set_value('username');?>" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password');?>" size="50" />
<?php echo form_error('password', '<div class="error">', '</div>'); ?>

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf');?>" size="50" />

<h5>Email Address</h5>
<input type="text" name="emails" value="<?php echo set_value('emails');?>" size="50" />

<h5>Habit</h5>
<input type="text" name="habit" value="<?php echo set_value('habit');?>" size="50" />

<div><input type="submit" value="Submit" /></div>
</form>

</body>
</html>