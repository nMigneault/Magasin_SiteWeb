<?php

require_once("Manager.php");

class homeManager extends Manager
{
    function nouvelAjout()
    {
        
        $pdo = $this->connexionBD();
        $stmt = $pdo->prepare('SELECT * FROM products ORDER BY name ASC LIMIT 4');
        $stmt->execute();
        $nouvel_ajout = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $nouvel_ajout;
    } 
}
