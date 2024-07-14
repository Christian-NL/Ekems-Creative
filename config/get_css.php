<?php
?>

<link rel="stylesheet" href="css/test.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/Style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="css/comment_form.css">

<style>
    .ie-panel{
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
        clear: both;
        text-align:center;
        position: relative;
        z-index: 1;
    }
    html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
        display: block;
    }
    .navbar-brand,
    .navbar-nav .nav-link.active {
        color: #FF9027;
    }
</style>

<style>
    .navbar-brand,
    .navbar-nav .nav-link.active {
        color: #FF9027 !important;
        font-weight: bold;
    }

    /* Assurer que le texte et le bouton de navigation responsive soient sur la même ligne */
    .rd-navbar-panel {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .navbar-brand {
        flex-grow: 1;
        text-align: center;
    }

    /* Enlever les bordures du bouton de navigation responsive et changer la couleur */
    .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 144, 39, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .custom-toggler {
        border: none;  /* Enlever les bordures */
        padding: 0;    /* Enlever le padding */
        background: none; /* Enlever le fond */
    }

    /* Ajuster l'espacement des liens de navigation pour éviter le passage à deux lignes */
    .navbar-nav .nav-link {
        white-space: nowrap; /* Empêcher le passage à deux lignes */
        margin-right: 15px;  /* Ajuster l'espacement entre les liens */
    }

    .navbar-nav .nav-item {
        margin-left: 5px;  /* Ajuster l'espacement entre les items */
    }

    .navbar-nav .nav-item:last-child .nav-link {
        margin-right: 0; /* Enlever la marge à droite du dernier élément */
    }
</style>

<style>
    /* CSS supplémentaire */
    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        margin-right: 10px;
    }

    .nav-link i.fas.fa-shopping-cart {
        font-size: 24px;
    }

    /* Cacher l'icône de panier par défaut et la montrer sur mobile */
    @media (max-width: 767px) {
        .cart-icon {
            display: inline-block;
        }

        .navbar-nav {
            text-align: center;
        }

        .navbar-collapse {
            justify-content: center;
        }
    }

    @media (min-width: 768px) {
        .cart-icon {
            display: inline-block;
            margin-left: auto;
        }

        .navbar-brand + .cart-icon {
            display: none;
        }
    }

</style>

<style>
    .pagination .page-item .page-link {
        padding: 0.5rem 0.75rem;
        margin: 0 0.25rem;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6;
        color: #a26ce8;
    }

    .pagination .page-item.active .page-link {
        background-color: #a26ce8;
        border-color: #a26ce8;
        color: white;
    }

    .pagination .page-item .page-link .small-icon {
        font-size: 1rem;
        vertical-align: middle;
    }
</style>