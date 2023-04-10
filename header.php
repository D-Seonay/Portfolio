<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo1.png">
    <script src="https://kit.fontawesome.com/6be31d0278.js" crossorigin="anonymous"></script>
    <meta name="description" content="Mathéo DELAUNAY | Portfolio About Me, Professional Experience And My Projects">


    <title>Matheo DELAUNAY | Portfolio</title>
</head>
<?php
if (isset($_POST['mailform']))
{
	if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']) AND !empty($_POST['first_name']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"MATHEO"<email-expediteur@example.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
					<u>Prenom de l\'expéditeur :</u>'.$_POST['first_name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
                    <u>Adresse Ip de l\'éxpediteur:</u>'.$_SERVER['REMOTE_ADDR'].'<br />
                    <u>Navigateur de l\'éxpediteur:</u>'.$_SERVER['HTTP_USER_AGENT'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("contact@seonay.eu", "CONTACT - contact@seonay.eu", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-links controlls" id="menu">
                <ul>
                    <li><a class="control control-1 active-btn" data-id="home">Home</a></li>
                    <li><a class="control control-2 " data-id="about">About Me</a></li>
                    <li><a class="control control-3 " data-id="portfolio">Portfolio</a></li>
                    <li><a class="control control-4 " data-id="contact">Contact</a></li>
                </ul>
            </div>
            <div class="navbar-icons">
                <div class="navbar-icon">
                    <button class="icon download-btn">
                        <a href="docs/CV.pdf" target="_blank">
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </button>
                    <button class="icon theme-btn">
                        <i class="fas fa-adjust"></i>
                    </button>
                    <button class="icon burger-menu-btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

