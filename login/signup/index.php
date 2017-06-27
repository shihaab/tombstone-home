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
<style>
	@import url(https://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Exo', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input {
	font-family: 'Exo', sans-serif;	
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
button {
	font-family: 'Exo', sans-serif;
}
a {
	color: #EF6480;
	border-bottom: 1px dotted #EF6480;
	text-decoration: none;
	transition: .4s;
}
a:hover {
	color: grey!important;
	border-bottom: 1px dotted rgba(0,0,0,0.00);
}
p {
	color: grey;
	font-family: 'Bubbler One', sans-serif;
}
	
/* Base CSS */
.alignleft {
    float: left;
    margin-right: 15px;
}
.alignright {
    float: right;
    margin-left: 15px;
}
.aligncenter {
    display: block;
    margin: 0 auto 15px;
}
a:focus { outline: 0 solid }
img {
    max-width: 100%;
    height: auto;
}
.fix { overflow: hidden }
a {
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    color: #EF6480;
}
a:hover { text-decoration: none }



.search-box{margin:80px auto;position:absolute;}
.caption{margin-bottom:50px;}
.loginForm input[type=text], .loginForm input[type=password]{
	margin-bottom:10px;
}
.loginForm input[type=submit]{
	background:#fb044a;
	color:#fff;
	font-weight:700;
	
}


#pswd_info {
	background: #dfdfdf none repeat scroll 0 0;
	color: #fff;
	left: 310px;
	position: absolute;
	top: 30px;
}
@media screen and (max-width: 799px) {
	#pswd_info {
		left: 0px;
		position: absolute;
		top: -120px;
		z-index: 99;
		transform: scale(0.6);
	}
	#pswd_info::before {
		height: 25px;
		left: 23px!important;
		margin-top: -12.5px;
		position: absolute;
		top: 100%!important;
		transform: rotate(45deg);
		width: 25px;
	}
}
#pswd_info h4{
    background: black none repeat scroll 0 0;
    display: block;
    font-size: 14px;
    letter-spacing: 0;
    padding: 17px 0;
    text-align: center;
    text-transform: uppercase;
}
#pswd_info ul {
    list-style: outside none none;
}
#pswd_info ul li {
   padding: 10px 45px;
}



.valid {
	background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/vq43s2wib/valid.png") no-repeat scroll 2px 6px;
	color: green;
	line-height: 21px;
	padding-left: 22px;
}

.invalid {
	background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/olmaj1p8z/invalid.png") no-repeat scroll 2px 6px;
	color: red;
	line-height: 21px;
	padding-left: 22px;
}


#pswd_info::before {
    background: #dfdfdf none repeat scroll 0 0;
    content: "";
    height: 25px;
    left: -13px;
    margin-top: -12.5px;
    position: absolute;
    top: 50%;
    transform: rotate(45deg);
    width: 25px;
}
#pswd_info {
    display:none;
}
</style>
</head>
<?php
include '../Modules/Configuratie.php';
include '../Modules/functies.php';
ConnectDB();

//init fields
$Email = $Username = $Password = $RetypePassword = NULL;

//init error fields
$MailErr = $UserErr = $PassErr = $RePassErr = NULL;

if(isset($_POST['Registreren']))
{
	$CheckOnErrors = false;

	$Email          = $_POST['Email'];
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
				<input type="text" name="email" placeholder="Email" required="required" value="<?php echo $Email?>">
				<input type="password" id="paw" name="password" placeholder="Password" required="required">
				<input type="password" name="retypepassword" placeholder="Retype Password" required="required">
				<button type="submit" id="submit" class="btn btn-primary btn-block btn-large">Make my account.</button>
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

		$sth = $pdo->prepare('INSERT INTO members ( Email, Inlognaam, Paswoord, Salt, Level) 
                              VALUES (:Email, :Username, :Paswoord, :Salt, :Level)');

		$sth->execute($parameters);


		echo "U heeft zich succesvol geregistreerd en kunt vanaf nu inloggen op de website ";
		echo "<br />";
		echo "U wordt binnen 5 seconden doorgestuurd naar de hoofdpagina ";
		header('Refresh:5; Location: https://tombstone-squad.com/');


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
				<input type="text" name="email" placeholder="Email" required="required">
				<input type="password" id="paw" name="password" placeholder="Password" required="required">
				<input type="password" name="retypepassword" placeholder="Retype Password" required="required">
				<button type="submit" id="submit" class="btn btn-primary btn-block btn-large">Make my account.</button>
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
