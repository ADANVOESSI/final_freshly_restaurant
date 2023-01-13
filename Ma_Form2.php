
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fname = $lname = $age = $mail = "";
    $errorFname = $errorLname = $errorAge = $errorMail = "";
    
    function security($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $fname = security($_POST['fname']);
    $lname = security($_POST['lname']);
    $age = security($_POST['age']);
    $mail = security($_POST['mail']);
    
    if (empty($fname)) {
        $errorFname = 'Entrez un nom valide';
    }
    
    if (empty($lname)) {
        $errorLname = 'Entrez un prénom valide';
    }
    if (empty($age)) {
        $errorAge = 'Entrez votre age';
    }
    if (empty($mail)) {
        $errorMail = 'Entrez votre mail';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon formulaire PHP</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    
    <div>
        <h2>* champs obligatoires</h2>
        <form action="#" method="POST">
            <fieldset>
                <legend>Mon Formulaire</legend>
                <p>
                    <label for="fname">Nom :</label>
                    <input id="fname" type="text" name="fname" placeholder="Entrez votre nom">
                    <span><?php echo $errorFname; ?></span>
                </p>

                <p>
                    <label for="lname">Prénom :</label>
                    <input id="lname" type="text" name="lname" placeholder="Entrez votre prénom">
                    <span><?php echo $errorLname; ?></span>
                </p>

                <p>
                    <label for="age">Age :</label>
                    <input id="age" type="number" name="age" placeholder="Entrez votre age">
                    <span><?php echo $errorAge; ?></span>
                </p>

                <p>
                    <label for="mail">Mail :</label>
                    <input id="mail" type="email" name="mail" placeholder="Entrez votre email">
                    <span><?php echo $errorMail; ?></span>
                </p>

                <input type="submit" value="Envoyer">
                <input type="reset" value="Annuler">

            </fieldset>
        </form>
    </div>

    <div>
        <?php
        echo $fname.'<br>';
        echo $lname.'<br>';
        echo $age.'<br>';
        echo $mail.'<br>';
        ?>
    </div>
</body>
</html>