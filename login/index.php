<?php
include 'Modules/Configuratie.php';
include 'Modules/functies.php';
$pdo = ConnectDB();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Tombstone</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Bubbler+One|Exo" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Modules/login.css">
</head><?php
    function login($Username, $password, $pdo)
    {
        $parameter = array(':status'=>$Username);
        $sth = $pdo->prepare('SELECT * FROM members WHERE username = :status');

        $sth->execute($parameter);

        if ($sth->rowCount() == 1)
        {

            $row = $sth->fetch();


            $password = hash('sha512', $password . $row['salt']);


            if ($row['password'] == $password)
            {
                $user_browser = $_SERVER['HTTP_USER_AGENT'];

                $_SESSION['user_id'] = $row['memberid'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['login_string'] = hash('sha512',
                    $password . $user_browser);
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    if(isset($_POST['Inloggen']))
    {

        $gebruikersnaam = $_POST['Gebruikersnaam'];
        $wachtwoord = $_POST['Wachtwoord'];


        $check = login($gebruikersnaam,$wachtwoord,$pdo);
        if ($check){
            echo "U bent succesvol ingelogd";
            header("Refresh: 5; url=https://tombstone-squad.com/");

        }
        else{
            echo "De Inlognaam of het paswoord is onjuist.";
            header("Refresh: 5; url=https://tombstone-squad.com/");
        }

    }
    else
    {
    ?><body>
        <div class="login">
            <h1>Login</h1>
            <form method="post" >
                <input type="text" name="Gebruikersnaam" placeholder="Username" required="required">
                <input type="password" name="Wachtwoord" placeholder="Password" required="required">
                <button type="submit" name="Inloggen" class="btn btn-primary btn-block btn-large">Let me in.</button>
            </form>
            <p>No account yet? No problem Sign Up <a href="/signup/">here!</a></p>
        </div>
        <div class="footer-text container text-center">
            <p>Powered by Tombstone-Squad &trade; <a href="https://tombstone-squad.com/">Tombstone-Squad.com</a></p>
        </div>
        </body>
        </html>
    <?php
}
?>