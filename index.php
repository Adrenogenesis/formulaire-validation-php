<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
          <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
          <link rel="stylesheet" type="text/css" media="screen" href="css/contact.css" />
          <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' 
          rel='stylesheet' type='text/css'>
        <!-- Text email numero de tél, checkbox, radio select date de naissance  -->
        <style>
.error {
    color: #FF0000;
    font-size:10px;
}

</style>
</head>
<body>
	<container>
        <header>
                 <img src="img/avatar19a.png" alt="avatar">
                  
            </header>
 <h1>Frédéric BRODAR</h1>
            <h2 id="po1">Mes objectifs</h2>
            <ol>
                 <li>Créé mon projet professionnel « webmaster »
                 </li>
                     <li>Avoir le plus d'atouts possibles, pour chercher un emploi.
                      </li>
                       <li>Acquérir d'autres compétences, à l'aide d'un stage en alternance ou d'un contrat de professionnalisation.
                        </li>
            </ol>

            <h2>Formation</h2>

            <ul class="a">
					<li>2018 → Développeur Web - Aformac BOURGES (18)</li>
                    <li>2018 : Azure et Microsoft 365 - Microsoft Tech Summit Paris (75) 2016-2017
                        </li>
                        <li>2016-2017 : Projet Webmaster – Bourges (18)
                        </li>
                        <li>2015 : Compétences transverses  – Les Aix d'Angillon (18)
                        </li>
                        <li>2007-2010 : Formation continue animateur - Bourges (18) 1984-1985 : Formation Dessinateur industriel - AFPA Stains (93)
                        </li>
                </ul>

                <h2>Expérience</h2>
		
		<div class="tab">
        <table>
            <tr>
                <th>Année</th>
                <th>Poste</th>
                <th>Résumé</th>
            </tr>
            <tr>
                <td class="col1">2016-2017</td>
                <td class="col2">Webmaster – Intégrateur web</td>
                <td class="col3">Webmaster freelance - Création de site internet – Association Exonet3i – 20 Av. de la Prospective Bourges (18)</td>
            </tr>
            <tr>
                <td class="col1">2012-2018</td>
                <td class="col2">Chauffeur</td>
                <td class="col3">Transport de personnes handicapées (Enfants) J.L.International - 1 Rue Paul Henri Spaak ZAE  J.Monnet -  77240 VERT St DENIS</td>
            </tr>
            <tr>
                <td class="col1">2007-2010</td>
                <td class="col2">Animateur</td>
                <td class="col3">Enseignement scientifique (Sciences et développement durable) Les Petits Débrouillards Bourges)</td>
            </tr>
		 <tr>
                <td class="col1">2005</td>
                <td class="col2">Technicien de maintenance câbles nucléaires.</td>
                <td class="col3">Nexans - 41 Rue Maurice Gorse, 18500 Mehun-sur-Yèvre.</td>
            </tr>
		 <tr>
                <td class="col1">1989-2005</td>
                <td class="col2">Artisan - Affûteur industriel.</td>
                <td class="col3">(Mécanique générale).Affûtage, conception et réalisation d’outils coupants. Ets. BRODAR Frédéric, Marcoussis (91)</td>
            </tr>
		 <tr>
                <td class="col1">1985-1989</td>
                <td class="col2">Affûteur industriel.</td>
                <td class="col3">Affûtage et réalisation d’outils coupants ( Affûtage de précision ) Ets. BRODAR André - Marcoussis (91)</td>
            </tr>
        </table>
    </div>
    <div class="contact">
 <!---contact form -------------------------->
 <?php
// define variables and set to empty values
$nameErr = $fnameErr = $checkErr = $emailErr = $telErr = $birthErr = $zipErr = $textErr = $villeErr = "";
$name = $fname = $checkbox = $email = $tel = $zip = $birthDate = $ville = $text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nom obligatoire";
  } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["lname"])) {
    $fnameErr = "Prenom obligatoire";
  } else {
    $fname = test_input($_POST["lname"]);
  }
  if (empty($_POST["gender"])) {
    $checkErr = "Champ obligatoire";
  } else {
    $checkbox = test_input($_POST["gender"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email requis";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["date"])) {
    $birthErr = "Date de naissance";
  } else {
    $birthDate = test_input($_POST["date"]);
  }

  if (empty($_POST["ville"])) {
    $villeErr = "Ville requis";
  } else {
    $ville = test_input($_POST["ville"]);
  }

  if (empty($_POST["zipcode"])) {
    $zipErr = "Code postal requis";
  } else {
    $zip = test_input($_POST["zipcode"]);
  }

  if (empty($_POST["lphone"])) {
    $telErr = "Téléphone requis";
  } else {
    $tel = test_input($_POST["lphone"]);
  }
  if (empty($_POST["message"])) {
    $txtErr = "Message requis";
  } else {
    $text = test_input($_POST["message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" id="fname" name="name"  placeholder="NOM*">
    <span class="error">* <?php echo $nameErr;?></span>
    <input type="text" id="lname" name="lname" placeholder="PRENOM*">
    <span class="error">* <?php echo $fnameErr;?></span><br>
    <input type="checkbox" name="ent" value="Masculin" checked="checked"> Particulier<br>
    <input type="checkbox" name="ent" value="Feminin" > Entreprise<br><br>
   
    <label for="date">DATE DE NAISSANCE</label><br>
    <input id="date" name="date" type="date" value="2017-06-01">
    <span class="error">* <?php echo $birthErr;?></span><br>

    <input type="radio" name="gender" value="male"> Masculin<br>
    <input type="radio" name="gender" value="female"> Feminin<br>
    <input type="radio" name="gender" value="other"> Autre<br>
    <span class="error">* <?php echo $checkErr;?></span><br>

    <input type="tel" id="phone" name="lphone" placeholder="TELEPHONE*">
    <span class="error">* <?php echo $telErr;?></span><br>

    <input type="email" id="email" name="email" placeholder="EMAIL*">
    <span class="error">* <?php echo $emailErr;?></span>
    <input type="text" id="zipcode" name="zipcode" placeholder="CODE POSTAL*">
    <span class="error">* <?php echo $zipErr;?></span>
    <input type="text" id="ville" name="ville" placeholder="VILLE*">
    <span class="error">* <?php echo $villeErr;?></span><br>
    <label for="message">MESSAGE*</label><br><br>
    <textarea type="box" id="message" name="message" cols="30" rows="10"></textarea><br><br>
    <span class="error">* <?php echo $textErr;?></span><br><br>
    <input type="submit" id="button" class="button" value="Envoyer">
  
  </form>

<?php
echo $name;
echo "<br>";
echo $fname;
echo "<br>";
echo $checkbox;
echo "<br>";
echo $email;
echo "<br>";
echo $birthDate;
echo "<br>";
echo $zip;
echo "<br>";
echo $tel;
echo "<br>";
echo $ville;
echo "<br>";
echo $text;
echo "<br>";

    if(isset($_POST['name']))
    {
    $name = trim($_POST["name"]);
    $fname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $ville = trim($_POST["ville"]);
    $text = trim($_POST["message"]);
    
    if(strlen($name)<2) {
        print "<p>Please type your name.</p>";
    }else if(strlen($fname)<2) {
        print "<p>Please type a subject.</p>";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print  "<p>Please type a valid email address.</p>";
    }else if(strlen($text)<10) {
        print "<p>Please type your message.</p>";
   
    }else{
                $headers =  'From: '.$email. "\r\n" .
                            'Reply-To: '.$email . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
        mail('webmst@exonet3i.com',$name,$text,$headers);
        print "mail succesuffully sent";
    }

}
?>
<!---end contact --------------------------------> 
    </div>
      <footer>
                  <h2>Ma phrase fétiche</h2>
                            <p>
                            Juste parce que <strong>ce n'est pas là</strong> où l'on s'y attend, ne <em>signifie pas</em> qu'il n'est pas ailleurs...
                    </p>
                                <h3>Crée par BRODAR Frédéric</h3>
</footer>
	</container>

</body>
</html>
