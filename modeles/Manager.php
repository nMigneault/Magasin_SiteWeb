<?php

class Manager
{
     function connexionBD()
    {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'panier';
        $DATABASE_PORT = '3306';

        try 
        {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';port=' . $DATABASE_PORT . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        }
        catch (PDOException $exception) 
        {
            exit('Impossible de se connecter à la base de données!');
        }
    }
}
