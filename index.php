<?php
    $appid = "APP_ID";
    $tennantid = "TENNANT_ID";
    $secret = "SECRET";
    $login_url ="https://login.microsoftonline.com/".$tennantid."/oauth2/v2.0/authorize";

    session_start ();
    $_SESSION['state']=session_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <link rel="icon" type="image/png" href="./assets/logo.png">
    <title>SCS | Credentials</title>
</head>
<body>
    <div id="header" class="header">
        <div class="subheader1">    
            <p>
                SCS
            </p>
            <a href="https://www.scs.ubbcluj.ro/">
                <div>
                    <img id="logo" onhover="rotateElement('logo')" src="./assets/logo.png" alt="logo"/>
                </div>
            </a>
        </div>
        <p class="subheader2">
            Initial Credentials
        </p>
    </div>
    <br/>
    <div id="howto" class="howto">
        <h1>
            HOW TO?
        </h1>
        <p>
            You should log in with your personal @stud.ubbcluj.ro email adress,<br/>after you will recive your scs credentials.<br/>Make sure you use the right email and password!
        </p>
        <span>
            Tip: You can change the password in the linux<br/>terminal using the 'passwd' command.<br/>It is recomanded to do it, so you don't need<br/>to search for the scs password every time.
        </spam>
    </div>
    <br/>
    <?php
        if (!array_key_exists("get_cred", $_POST)) { 
            unset($_POST["log-out"]);
    ?>
    <div id="log_in" class="log_in">
        <h3>
            Get Credentials
        </h3>
        <form method="post">
            <input type="submit" name="get_cred" value="Here" class="login_button" />
        </form>
    </div>
    <?php 
        } else { 
            unset($_POST["get_cred"]);
    ?>
    <div id="logged_in" class="log_in">
        <h3 id="name">RĂZVAN CHIȚEA</h3>
        <form method="post">
            <input type="submit" name="log-out" value="Log out" class="credencials_button" />
        </form>
        <h3>Your credentials are:</h3>
        <div class="data_div">
            <p>username:&nbsp;</p>
            <p id="username">crir3305</p>
        </div>
        <button onclick="copyToClickboard('username')" class="credencials_button">copy</button>
        <br/>
        <div class="data_div password">
            <div>password:&nbsp;</div>
            <p id="password">here_is_the_password</p>
        </div>
        <button onclick="copyToClickboard('password')" class="credencials_button">copy</button>
    </div>
    <?php } ?>
    <br/>
    <br/>
    <br/>
    <div id="footer" class="footer">
        <div class="footer1">
            <p>MADE BY &nbsp;<a href="https://github.com/irchit">irchit_Dev</a>&nbsp; (CHIȚEA RĂZVAN)</p>
            <p>WITH HELP BY ALEXANDRU KIRALY</p>
        </div>
        <div class="footer2">
            <p><a href="https://www.cs.ubbcluj.ro/">CS.UBBCLUJ.RO</a></p>
            <p><a href="https://www.scs.ubbcluj.ro/landing/">SCS.UBBCLUJ.RO</a></p>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>