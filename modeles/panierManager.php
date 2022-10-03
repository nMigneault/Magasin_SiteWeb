<?php

require_once("Manager.php");

class panierManager extends Manager
{

    function panier()
    {
        $pdo = $this->connexionBD();
        
        // l'utilisateur clique ajouter nous devons valider si le produit existe et en quantité > 0
        if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) 
        {
            // Assignation des variables Produit_id et quantité
            $product_id = (int)$_POST['product_id'];
            $quantity = (int)$_POST['quantity'];
            
            $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
            $stmt->execute([$_POST['product_id']]);
            
            $produit = $stmt->fetch(PDO::FETCH_ASSOC);

            // Validation: produit et quantité > 0 dans la BD
            if ($produit && $quantity > 0) 
            {
                // Produit existe dans la bd, Validation si la variable de session PANIER existe
                if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) 
                {
                    if (array_key_exists($product_id, $_SESSION['panier'])) 
                    {
                        // si produit déjà dans le PANIER, modifier quantité
                        $_SESSION['panier'][$product_id] += $quantity;                    
                    } 
                    else 
                    {
                        // si produit pas dans le PANIER, lui assigner la quantité
                        $_SESSION['panier'][$product_id] = $quantity;
                    }
                } 
                else 
                {
                    // si la variable de session n'exite pas, la création de PANIER
                    $_SESSION['panier'] = array($product_id => $quantity);
                }
            }
            header('location: index.php?page=vues/panier');
            exit;
        }

        // Retirer produit du PANIER
        if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['panier']) && isset($_SESSION['panier'][$_GET['remove']])) 
        {
            unset($_SESSION['panier'][$_GET['remove']]);
        }

        // UPDATE du PANIER lorsque l'utilisateur clique update.
        if (isset($_POST['update']) && isset($_SESSION['panier'])) 
        {
            foreach ($_POST as $key => $value) 
            {
                if (strpos($key, 'quantity') !== false && is_numeric($value)) 
                {
                    $id = str_replace('quantity-', '', $key);
                    $quantity = (int)$value;

                    if (is_numeric($id) && isset($_SESSION['panier'][$id]) && $quantity > 0) 
                    {
                        $_SESSION['panier'][$id] = $quantity;
 
                    }
                }
            }
            
            header('location: index.php?page=vues/panier');
            exit;
        }

        // Vérification des variables de session du panier 
        $produits_dans_panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : array();
        $produits = array();
        $subtotal = 0.00;
        // Si il y a des produits
        if ($produits_dans_panier) 
        {
            
            // Produits dans le panier, remplissage du array to question mark string avec la liste des ID (ou key), qui sera passé pour avoir la liste de produit
            $array_to_question_marks = implode(',', array_fill(0, count($produits_dans_panier), '?'));
            // preparation du query
            $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
            // exécution du query
            $stmt->execute(array_keys($produits_dans_panier));
            // va chercher la liste des produits
            $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Calcul du sous-total
            foreach ($produits as $produit) 
            {
                $subtotal += (float)$produit['price'] * (int)$produits_dans_panier[$produit['id']];
            }
        }

        // Clique commander -> envoi à la page de confirmation et mets la BD a jour
        if (isset($_POST['commander']) && isset($_SESSION['panier']) && !empty($_SESSION['panier'])) 
        {
            foreach ($produits as $produit) 
            {
                $quantiteDisponible =(int)$produit['quantity'] -=(int)$produits_dans_panier[$produit['id']];
                $pdo->query('UPDATE products SET quantity='.$quantiteDisponible.' where id='.$produit['id'].'');
            }
        // suppression du contenu de la variable de session
        unset($_SESSION['panier']);
        // redirection
        header('Location: index.php?page=vues/commander');
        exit;
        }

        require('vues/panier.php');
    }
}