<?php
session_start();

function checkCartExpiry() {
    $cartExpiryTime = 30 * 60; // 30 minutes
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $cartExpiryTime)) {
        // Si l'utilisateur est inactif pendant plus de 30 minutes, vider le panier
        unset($_SESSION['cart']);
        unset($_SESSION['last_activity']);
    } else {
        // Mettre à jour l'heure de la dernière activité
        $_SESSION['last_activity'] = time();
    }
}

checkCartExpiry();
?>
