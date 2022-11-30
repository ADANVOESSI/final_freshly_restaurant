<?php
require "./header.php";
?>
    <div class="container">
        <h2>Connexion</h2>
        <form action="./includes/login.inc.php" method="post">
            <!-- User Name -->
            <div class="input">
                <input type="text" name="uid" placeholder="User Name ou Email">
            </div>
            <!-- Mot de passe ou Email -->
            <div class="input">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="input">
                <button type="submit" name="login">S'inscrire</button>
                <button type="reset" name="reset">Rafraichir</button>
            </div>
        </form>
        <p>Pas encore inscris ? <a href="./index.php">inscrivez-vous.</a></p>
    </div>
    
<?php
    require "./footer.php";
?>