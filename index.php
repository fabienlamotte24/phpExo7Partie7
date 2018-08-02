<?php
$lastNameErr = $firstNameErr = $fileErr = '';
$lastName = $firstName = $file = '';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 7</title>
    </head>
    <body><!--Formulaire de qualité-->
        <?php
        if ((isset($_POST['lastName']) && !empty($_POST['lastName']) && preg_match('/^[a-zA-Z\- éèêç]*$/', $_POST['lastName'])) && (isset($_POST['firstName']) && !empty($_POST['firstName']) && preg_match('/^[a-zA-Z\- éèêç]*$/', $_POST['firstName'])) && (isset($_POST['choice']) && !empty($_POST['choice'])) && isset($_FILES['phpFile'])) {
            echo 'Nom: ' . $_POST['lastName'];
            ?>
            <br />
            <?php
            echo 'Prénom: ' . $_POST['firstName'];
            ?>
            <br />
            <?php
            echo 'Genre: ' . $_POST['choice'];
            ?>
            <br />
            <?php
            echo 'Votre fichier: ' . $_FILES['phpFile']['name'];
        } else {
            if (empty($_POST['lastName'])) {
                $lastNameErr = 'Ce champs est vide';
            } elseif (preg_match('/^[a-zA-Z\- éèêç]*$/', $lastName)) {
                $lastNameErr = 'Votre saisie possède des caractères incorrects';
            }

            if (empty($_POST['firstName'])) {
                $firstNameErr = 'Ce champs est vide';
            } elseif (preg_match('/^[a-zA-Z\- éèêç]*$/', $firstName)) {
                $firstNameErr = 'Votre saisie possède des caractères incorrects';
            }
            ?>
            <form class="form" action="#" method="post" enctype="multipart/form-data"><!--Création formulaire-->
                <label for="lastName">Votre nom: </label><input type="text" name="lastName" placeholder="nom" /><span class="error">* <?php echo $lastNameErr; ?></span><br><br>
                <label for="firstName">Votre prénom: </label><input type="text" name="firstName" placeholder="prénom" /><span class="error">* <?php echo $firstNameErr; ?></span><br><br>
                <label for="choice" name="choice">Votre sexe: </label>
                <select class="choice" name="choice">
                    <option value="monsieur">Monsieur</option>
                    <option value="madame">Madame</option>
                    <option value="non_binaire">Non-Binaire</option>
                </select><br><br>
                <label for="phpFile" name="phpFile">Uploadez ici votre fichier: </label>
                <input type="file" name="phpFile" /><span class="error">*<?php echo $fileErr; ?></span><br><br>
                <input type="submit" name="submit" />
            </form>
            <?php
            if (empty($_POST['lastName'])) {
                $lastNameErr = 'Ce champs est vide';
            } elseif (preg_match('/^[a-zA-Z\- éèêç]*$/', $lastName)) {
                $lastNameErr = 'Votre saisie possède des caractères incorrects';
            }

            if (empty($_POST['firstName'])) {
                $firstNameErr = 'Ce champs est vide';
            } elseif (preg_match('/^[a-zA-Z\- éèêç]*$/', $firstName)) {
                $firstNameErr = 'Votre saisie possède des caractères incorrects';
            }
        }
        ?>
    </body>
</html>
