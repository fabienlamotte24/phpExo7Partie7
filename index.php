<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 7</title>
    </head>
    <body><!--Condition pour afficher les informations dans une phrase complète si toutes les informations sont renseignées-->
    <?php
    if(isset($_POST['submit'])){
      if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['civility']) && !empty($_FILES['file'])){
        $fileInfo = pathinfo($_FILES['file']['name']);
        var_dump($fileInfo);
        echo 'Je m\'appelle ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' et je suis ' . $_POST['civility'] . ' et voici mon CV: ' . $_FILES['file']['name'];
      } else {
        ?>
        <form action="#" method="POST" enctype="multipart/form-data"><!--Création formulaire qui ne s'affiche qu'au début et lorsque toutes les informations ne sont pas remplies-->
          <label for="lastName">Votre nom: </label><br>
          <input type="text" name="lastName" id="lastName" placeholder="nom" size="30" /><!--Champs nom de famille-->
          <label for="firstName">Votre prénom: </label><br>
          <input type="text" name="firstName" id="firstName" placeholder="prénom" size="30" /><!--Champs prénom-->
          <select name="civility" id="civility"><!--Champs de sélection du sexe-->
            <option selected disabled>Sélectionner votre sexe</option>
            <option value="un homme">Masculin</option><!--Selection masculin-->
            <option value="une femme">Féminin</option><!--Selection féminin-->
            <option value="non_binaire">Non Binaire</option><!--Selection non-binaire-->
          </select><br>
          <label for="file">Sélectionnez un fichier: </label> 
          <input type="file" name="file" /><br>
          <input type="submit" name="submit" id="submit" value="Soumettre" /><span class="error"><?= 'Tous les champs ne sont pas remplis !';?></span>
        </form>
        <?php
      }
  } else {
?>
    <form action="#" method="POST" enctype="multipart/form-data"><!--Création formulaire qui ne s'affiche qu'au début et lorsque toutes les informations ne sont pas remplies-->
      <label for="lastName">Votre nom: </label>
      <input type="text" name="lastName" id="lastName" placeholder="nom" size="30" /><br><!--Champs nom de famille-->
      <label for="firstName">Votre prénom: </label>
      <input type="text" name="firstName" id="firstName" placeholder="prénom" size="30" /><br><!--Champs prénom-->
      <label for="civility">Votre sexe: </label>
      <select name="civility" id="civility"><!--Champs de sélection du sexe-->
        <option selected disabled>Sélectionner votre sexe</option>
        <option value="un homme">Masculin</option><!--Selection masculin-->
        <option value="une femme">Féminin</option><!--Selection féminin-->
        <option value="non_binaire">Non Binaire</option><!--Selection non-binaire-->
      </select><br>
      <label for="file">Sélectionnez un fichier: </label> 
      <input type="file" name="file" /><br>
      <input type="submit" name="submit" value="Soumettre" />
    </form>
    <?php
  }
  ?>
  </body>
</html>
