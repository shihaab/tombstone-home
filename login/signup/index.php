<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup Tombstone</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bubbler+One|Exo" rel="stylesheet">
<link href="../Modules/register.css" type="text/css" rel="stylesheet">
</head>
<?php
include '../Modules/Configuratie.php';
include '../Modules/functies.php';

$pdo = ConnectDB();

//init fields
$Email = $Username = $Password = $RetypePassword = NULL;

//init error fields
$MailErr = $UserErr = $PassErr = $RePassErr = NULL;

if(isset($_POST['Registreren']))
{
	$CheckOnErrors = false;

	$Email          = $_POST['email'];
	$Username       = $_POST['username'];
	$Password       = $_POST['password'];
	$RetypePassword = $_POST['retypepassword'];


	if (empty($Email)){
		$CheckOnErrors = true;
		$MailErr = 'Verplicht invullen';
	}
	elseif (is_email($Email) == false ){
		$CheckOnErrors = true;
		$MailErr = 'Geen geldig Email adres';
	}
	elseif (is_email_Unique($Email,$pdo) == false ){
		$CheckOnErrors = true;
		$MailErr = 'De Email is al in gebruik';
	}

	if (empty($Username)){
		$CheckOnErrors = true;
		$UserErr = 'Verplicht invullen';
	}
	elseif (is_Username_Unique($Username,$pdo) == false ){
		$CheckOnErrors = true;
		$UserErr = 'De gebruikers naam bestaat al';
	}

	if (empty($Password)){
		$CheckOnErrors = true;
		$PassErr = 'Verplicht invullen';
	}
	elseif (is_minlength($Password, 8) == false ){
		$CheckOnErrors = true;
		$PassErr = 'Moet minimaal 8 karakters lang zijn';
	}
	elseif (preg_match("#[0-9]+#", $Password) == false ){
		$CheckOnErrors = true;
		$PassErr = 'Moet minimaal 1 nummer bevatten';
	}
	elseif (preg_match("#[A-Z]+#", $Password) == false ){
		$CheckOnErrors = true;
		$PassErr = 'Moet minimaal 1 hoofd letter bevatten';
	}
	elseif (preg_match("#[A-z]+#", $Password) == false ){
		$CheckOnErrors = true;
		$PassErr = 'Moet minimaal 1 letter bevatten';
	}
	elseif (preg_match("#[^a-zA-Z0-9\-\/]+#", $Password) == false ){
		$CheckOnErrors = true;
		$PassErr = 'Moet minimaal 1 [~,!,@,#,$,%,^,&,*,-,=,.,;,\] bevatten';
	}


	if ($Password != $RetypePassword){
		$CheckOnErrors = true;
		$RePassErr = 'Pasword komt niet overeen';
	}

	if($CheckOnErrors == true)
	{
?>
	<body>
	<div class="login row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="aro-pswd_info">
				<div id="pswd_info">
					<h4>Password requirements</h4>
					<ul>
						<li id="letter" class="invalid">At least <strong>one letter</strong></li>
						<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
						<li id="number" class="invalid">At least <strong>one number</strong></li>
						<li id="length" class="invalid">At least <strong>8 characters</strong></li>
						<li id="space" class="invalid">Must <strong> contain [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>Sign Up</h1>
			<form method="post" class="loginForm">
				<?php echo $UserErr?>
				<input type="text" id="name" name="username" placeholder="Username" required="required" value="<?php echo $Username?>">
				<?php echo $MailErr?>
				<input type="email" name="email" placeholder="Email" required="required" value="<?php echo $Email?>">
				<?php echo $PassErr?>
				<input type="password" id="paw" name="password" placeholder="Password" required="required">
				<input type="password" name="retypepassword" placeholder="Retype Password" required="required">
				<button type="submit" name="Registreren" id="submit" class="btn btn-primary btn-block btn-large">Make my account.</button>
			</form>
			<p>Already have an account? Go to the Signin page <a href="../">here!</a></p>
		</div>

	</div>
	<div class="footer-text container text-center">
		<p>Powered by Tombstone-Squad &trade; <a href="https://tombstone-squad.com/">Tombstone-Squad.com</a></p>
	</div>
	<script>
		$(document).ready(function(){

			$('#paw').keyup(function() {
				var pswd = $(this).val();

				//validate the length
				if ( pswd.length < 8 ) {
					$('#length').removeClass('valid').addClass('invalid');
				} else {
					$('#length').removeClass('invalid').addClass('valid');
				}

				//validate letter
				if ( pswd.match(/[A-z]/) ) {
					$('#letter').removeClass('invalid').addClass('valid');
				} else {
					$('#letter').removeClass('valid').addClass('invalid');
				}

				//validate capital letter
				if ( pswd.match(/[A-Z]/) ) {
					$('#capital').removeClass('invalid').addClass('valid');
				} else {
					$('#capital').removeClass('valid').addClass('invalid');
				}

				//validate number
				if ( pswd.match(/\d/) ) {
					$('#number').removeClass('invalid').addClass('valid');
				} else {
					$('#number').removeClass('valid').addClass('invalid');
				}

				//validate space
				if ( pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
					$('#space').removeClass('invalid').addClass('valid');
				} else {
					$('#space').removeClass('valid').addClass('invalid');
				}

			}).focus(function() {
				$('#pswd_info').show();
			}).blur(function() {
				$('#pswd_info').hide();
			});

		});
	</script>
	</body>
	</html>

<?php
	}
	else
	{

		$Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

		$Password = hash('sha512', $Password . $Salt);

		$parameters = array(':Email'=>$Email,
			':Username'=>$Username,
			':Paswoord'=>$Password,
			':Salt'=>$Salt,
			':Level'=>1);

		$sth = $pdo->prepare('INSERT INTO members ( email, username, password, salt, level) 
                              VALUES (:Email, :Username, :Paswoord, :Salt, :Level)');

		$sth->execute($parameters);


		echo "U heeft zich succesvol geregistreerd en kunt vanaf nu inloggen op de website ";
		echo "<br />";
		echo "U wordt binnen 5 seconden doorgestuurd naar de hoofdpagina ";
		header("Refresh: 5; URL=https://tombstone-squad.com/");


	}
}
else
{
?>
	<body>
	<div class="login row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="aro-pswd_info">
				<div id="pswd_info">
					<h4>Password requirements</h4>
					<ul>
						<li id="letter" class="invalid">At least <strong>one letter</strong></li>
						<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
						<li id="number" class="invalid">At least <strong>one number</strong></li>
						<li id="length" class="invalid">At least <strong>8 characters</strong></li>
						<li id="space" class="invalid">Must <strong> contain [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1>Sign Up</h1>
			<form method="post" class="loginForm">
				<input type="text" id="name" name="username" placeholder="Username" required="required">
				<input type="email" name="email" placeholder="Email" required="required">
				<input type="password" id="paw" name="password" placeholder="Password" required="required">
				<input type="password" name="retypepassword" placeholder="Retype Password" required="required">
				<button type="submit" name="Registreren" id="submit" class="btn btn-primary btn-block btn-large">Make my account.</button>
			</form>
			<p>Already have an account? Go to the Signin page <a href="../">here!</a></p>
		</div>

	</div>
	<div class="footer-text container text-center">
		<p>Powered by Tombstone-Squad &trade; <a href="https://tombstone-squad.com/">Tombstone-Squad.com</a></p>
	</div>
	<script>
		$(document).ready(function(){

			$('#paw').keyup(function() {
				var pswd = $(this).val();

				//validate the length
				if ( pswd.length < 8 ) {
					$('#length').removeClass('valid').addClass('invalid');
				} else {
					$('#length').removeClass('invalid').addClass('valid');
				}

				//validate letter
				if ( pswd.match(/[A-z]/) ) {
					$('#letter').removeClass('invalid').addClass('valid');
				} else {
					$('#letter').removeClass('valid').addClass('invalid');
				}

				//validate capital letter
				if ( pswd.match(/[A-Z]/) ) {
					$('#capital').removeClass('invalid').addClass('valid');
				} else {
					$('#capital').removeClass('valid').addClass('invalid');
				}

				//validate number
				if ( pswd.match(/\d/) ) {
					$('#number').removeClass('invalid').addClass('valid');
				} else {
					$('#number').removeClass('valid').addClass('invalid');
				}

				//validate space
				if ( pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
					$('#space').removeClass('invalid').addClass('valid');
				} else {
					$('#space').removeClass('valid').addClass('invalid');
				}

			}).focus(function() {
				$('#pswd_info').show();
			}).blur(function() {
				$('#pswd_info').hide();
			});

		});
	</script>
	</body>
	</html>

<?php
}
?>
