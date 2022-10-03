<?php

	session_start();

	require 'controleur/controleur.php';

	if(isset($_GET["page"]))
    {
		if($_GET["page"] == "vues/accueil")
		{
			afficherHeader('Pépinière Labranche | Accueil');
			afficherNouvelAjout();
		}
		else if($_GET["page"] == "vues/produits")
		{
			afficherHeader('Produits');
			afficherProduits();
		}
		else if($_GET["page"] == "vues/produit")
		{
			afficherHeader('Produit');
			afficherUnProduit($_GET['id']);
		}
		else if($_GET["page"] == "vues/panier")
		{
			afficherHeader('Panier');
			afficherPanier();
		}
		else if($_GET["page"] == "vues/contact")
		{
			afficherHeader('Contact');
			afficherContact();
		}
		else if($_GET["page"] == "vues/commander")
		{
			afficherHeader('Commander');
			afficherCommander();
		}
    }
	else
	{
		afficherHeader('Pépinière Labranche | Accueil');
		afficherNouvelAjout();
	}

	afficherFooter();
