<?php
require('modeles/homeManager.php');
require('modeles/panierManager.php');
require('modeles/produitManager.php');
require('modeles/produitsManager.php');

function afficherNouvelAjout()
{
    $homeManager = new homeManager();
    $produit_nouvel_ajout = $homeManager->nouvelAjout();
    require('vues/accueil.php');
}

function afficherProduits()
{
    $produitsManager = new produitsManager();
    $produits = $produitsManager->getTousLesProduits();
    require('vues/produits.php');
}

function afficherUnProduit($idProduit)
{
    $produitManager = new produitManager();
    $produit = $produitManager->getUnProduit($idProduit);
    require('vues/produit.php');
}

function afficherPanier()
{   
    $panierManager = new panierManager();
    $panierManager->panier();
}

function afficherContact()
{
    require('vues/contact.php');
}


function afficherFooter()
{
    require('vues/footer.php');
}

function afficherCommander()
{
    require('vues/commander.php');
}

function afficherHeader($title)
{
    // Calcul du nombre d'item dans le panier, affiche le nombre différents ITEMS 
    // fontawesome est utilisé pour l'icone du panier <i class="fas fa-shopping-cart"></i>

    $num_items = isset($_SESSION['panier']) ? count($_SESSION['panier']) : 0;

    require('vues/header.php');
}
