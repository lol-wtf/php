<?php
	session_start();
	if(isset($_SESSION['count']))
	{
		$count = $_SESSION['count'];
	}
	else
	{
		$count=0;
	}
	$count++;
	$_SESSION['count']=$count;
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$ok = false;
	if(isset($user) && isset($pass) && $count <= 3 && $user===$pass)
	{
		$ok = true;
		echo "<h1>Welcome - Login Successful.</h1>";
	}
	if($count > 3)
	{
		echo "3 attempts are over";
	}
	if(!$ok && $count<=3)
	{
?>
<form method='post' action='login.php'>
<pre>
User 	:<input type='text' name='user'><br>
Password:<input type='password' name='pass'><br>
<input type='submit'>	<input type='reset'>
</pre>
</form>
<?php
	}
?>

