<?php
// TODO: Inclure le header


// Initialiser les variables
$prenom = $nom = $age = $email = '';
$errors = [];
$user = null;

// TODO: Récupérer les données POST si le formulaire est soumis
if () {
    // TODO: Sécuriser la récupération des données (trim, htmlspecialchars si besoin)
    $prenom = trim($_POST['prenom'] ?? '');
    $nom = 
    $age = 
    $email = 

    // TODO: Valider prénom (non vide)
    if () {
        $errors[] = "Le prénom est obligatoire.";
    }

    // TODO: Valider nom (non vide)
    if () {
        $errors[] = "Le nom est obligatoire.";
    }

    // TODO: Valider âge (entier >= 18)
    if () {
        $errors[] = "L'âge doit être un nombre entier supérieur ou égal à 18.";
    }

    // TODO: Valider email (utiliser la fonction isValidEmail)
    if () {
        $errors[] = "L'adresse email n'est pas valide.";
    }

    // TODO: Si pas d'erreurs, stocker dans $user
    if (empty($errors)) {

    }
}

// Fonction de validation d'email
function isValidEmail($email)
{
    // Simple filtre PHP
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// TODO: Inclure le formulaire (il utilise les variables $prenom, $nom, $age, $email pour pré-remplissage)


// Affichage des erreurs
if (!empty($errors)) {
    echo '<div style="color:red;"><ul>';
    foreach ($errors as $error) {
        echo '<li>' . htmlspecialchars($error) . '</li>';
    }
    echo '</ul></div>';
}

// Affichage du message de succès
if ($user !== null) {
    echo '<div style="color:green;">';
    echo "Inscription réussie pour " . htmlspecialchars($user['prenom']) . " " . htmlspecialchars($user['nom']) . " (âge : " . $user['age'] . ").";
    echo '</div>';
}

// TODO: Inclure le footer

