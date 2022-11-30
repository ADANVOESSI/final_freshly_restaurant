<?php

/**
 * Classe qui permet de valider les informations 
 * de l'utilisateur
 */
class RegisterController {
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $password;
    private $passwordConfirm;
    
    public function __construct($firstname, $lastname, $username, $email, $password, $passwordConfirm) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirm = $passwordConfirm;
    }

    public function valideInput() {
        $this->emptyInputs();
        $this->validateUsername();
        $this->validateEmail();
        $this->pwdMatch();
    }
    
    /**
     * Vérifie si les inputs sont renseignés
     * @return boolean
     */
    public function emptyInputs() {
        // votre code
        if(empty($this->firstname) || empty($this->lastname) || empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passwordConfirm)){
            header("Location:../index.php?msg=emptyinput&firstname=$this->firstname&lastname=$this->lastname&username=$this->username&email=$this->email");
        }else{
            return false;
        }
    }

    /**
     * Vérifie si le username est renseigné 
     * @return boolean
     */
    public function validateUsername() {
        // correspond à un username commençant par un caractère alphabétique suivi d'un ou plusieurs caractères alphabétique|nombres|@|_|-
        if(!preg_match("/^\w[A-Za-z0-9_\-@]+$/i", $this->username)) {
            header("Location: ../index.php?msg=username");
        }
        return false;
    }

    /**
     * Vérifie si le email est renseigné et valide 
     * @return boolean
     */
    public function validateEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?msg=invalidEmail");
        }
        return false;
    }

    /**
     * Vérifie si les mots de passes renseignés sont identiques 
     * @return boolean
     */
    public function pwdMatch() {
       if ($this->password !== $this->passwordConfirm) {
        header("Location: ../index.php?msg=passwordNotMatch");
       }
       return false;
    }
}