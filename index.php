<?php
require "./header.php";
?>

    <div class="container">
        <h2>Inscription</h2>
        <form action="./includes/register.inc.php" method="post">
            <!-- First Name -->
            <div class="input">
                <input 
                type="text" 
                name="firstname" 
                placeholder="Fisrt Name" 
                value="<?php echo $_GET["firstname"] ?? '' ?>" 
                required>
            </div>
            <!-- Lasst Name -->
            <div class="input">
                <input 
                type="text" 
                name="lastname" 
                placeholder="Lasrt Name"
                value="<?php echo $_GET["lastname"] ?? '' ?>" 
                
                >
            </div>
            <!-- User Name -->
            <div class="input">
                <input 
                type="text" 
                name="username" 
                placeholder="User Name" 
                value="<?php echo $_GET["username"] ?? '' ?>" 
                required>
            </div>
            <!-- Email -->
            <div class="input">
                <input 
                type="text" 
                name="email"
                placeholder="Email" 
                value="<?php echo $_GET["email"] ?? '' ?>" 
                required>
            </div>
            <!-- Mot de passe -->
            <div class="input">
                <input type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <!-- Confirmation Mot de passe -->
            <div class="input">
                <input type="password" name="password-confirm" placeholder="Confirmez votre mot de passe" required>
            </div>
            <div class="input">
                <button type="submit" name="register">S'inscrire</button>
                <button type="reset" name="reset">Rafraichir</button>
            </div>
        </form>
        <p>Déja inscris ? <a href="./login.php">connectez-vous.</a></p>
    </div>

<?php
require "./footer.php";
?>