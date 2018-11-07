<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire javascript</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="flex-container">
    <h1>Formulaire2 javascript</h1>
      <div class="number1">
        <form action="message.php" name="validation" id="form" method="post" onSubmit="return checkbae()">
            Nom
            <input type="text" name="name" maxlength="10"
                   title="Lettres seulement !"
                   value="Nom"
                   onkeydown="return alphaOnly(event);"
                   onblur="if (this.value == '') {this.value = 'Nom';}"
                   onfocus="if (this.value == 'Nom') {this.value = '';}" required />
                    &nbsp;<br>
            Prenom
            <input type="text" name="prenom" maxlength="10"
                   title="Lettres seulement !"
                   value="Prenom"
                   onkeydown="return alphaOnly(event);"
                   onblur="if (this.value == '') {this.value = 'Prenom';}"
                   onfocus="if (this.value == 'Prenom') {this.value = '';}"/>
                   <br>
                   Date de naissance
                   <input id="date" type="date" value="01-06-2017"><br>
                   Email

                   <input type="email" id="email" name="email" maxlength="20" placeholder="Email"><br>

                   <label for="message">Message</label><br><br>
    <textarea type="box" id="message" name="message" cols="30" rows="10"></textarea><br><br>
    <input type="submit" id="submit" class="button" value="Envoyer">
</form>
<script language="JavaScript1.2">

//Advanced Email Check credit-
//By JavaScript Kit (http://www.javascriptkit.com)
//Over 200+ free scripts here!

var testresults
function checkemail(){
var str=document.validation.email.value
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
testresults=true
else{
alert("Veuillez entrer une adresse email valide!")
testresults=false
}
return (testresults)
}
</script>

<script>
function checkbae(){
if (document.layers||document.getElementById||document.all)
return checkemail()
else
return true
}
</script>



    </div>
</div>

                                        <script src="js/form.js"></script>
</body>
</html>
